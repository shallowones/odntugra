<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CUwPollsDetail extends CBitrixComponent
{
    const PROPERTY_CODE_OPTIONS = 'OPTIONS';

    const PROPERTY_CODE_ANSWERS = 'ANSWERS';

    private function setAnswer($pollId, $optionId)
    {
        $rsOptions = \CIBlockElement::GetProperty(
            $this->arParams['IBLOCK_ID'],
            $pollId,
            ['sort' => 'asc'],
            ['CODE' => self::PROPERTY_CODE_OPTIONS]
        );
        $countOptions = 0;
        while ($option = $rsOptions->Fetch()) {
            if ($option['PROPERTY_VALUE_ID'] === $optionId) {
                break;
            }
            $countOptions++;
        }

        $rsAnswers = \CIBlockElement::GetProperty(
            $this->arParams['IBLOCK_ID'],
            $pollId,
            ['sort' => 'asc'],
            ['CODE' => self::PROPERTY_CODE_ANSWERS]
        );
        $countAnswers = 0;
        $propertyAnswer = [];
        while ($answer = $rsAnswers->Fetch()) {
            $value = $answer['VALUE'];
            if ($countAnswers === $countOptions) {
                $value = strval(intval($answer['VALUE']) + 1);
            }
            $propertyAnswer[$answer['PROPERTY_VALUE_ID']]['VALUE'] = $value;
            $countAnswers++;
        }

        \CIBlockElement::SetPropertyValuesEx(
            $pollId,
            $this->arParams['IBLOCK_ID'],
            [
                self::PROPERTY_CODE_ANSWERS => $propertyAnswer
            ]
        );

        $polls = unserialize(
            \UW\Tools::getCookie(
                $this->arParams['COOKIE_NAME']
            )
        );
        $polls[] = $pollId;
        \UW\Tools::setCookie(
            $this->arParams['COOKIE_NAME'],
            serialize($polls)
        );

        $this->arResult['answers'] = $this->getResults();
    }

    private function getPoll()
    {
        $result = [];

        $rs = \CIBlockElement::GetList(
            ['sort' => 'asc', 'id' => 'asc'],
            ['ACTIVE' => 'Y', 'IBLOCK_ID' => $this->arParams['IBLOCK_ID'], 'ID' => $this->arParams['ELEMENT_ID']],
            false,
            false,
            ['ID', 'NAME']
        );

        if ($poll = $rs->Fetch()) {
            $result = [
                'id' => $poll['ID'],
                'name' => $poll['NAME']
            ];

            $rsProps = \CIBlockElement::GetProperty(
                $this->arParams['IBLOCK_ID'],
                $poll['ID'],
                ['sort' => 'asc'],
                ['CODE' =>
                    [self::PROPERTY_CODE_OPTIONS, self::PROPERTY_CODE_ANSWERS]
                ]
            );
            while ($prop = $rsProps->Fetch()) {
                $key = strtolower(
                    (self::PROPERTY_CODE_OPTIONS === $prop['CODE'])
                        ? $prop['CODE']
                        : self::PROPERTY_CODE_ANSWERS
                );
                $propId = $prop['PROPERTY_VALUE_ID'];

                $result[$key][$propId] = $prop['VALUE'];
            }
        }

        return $result;
    }

    private function getResults()
    {
        $poll = $this->getPoll();

        $result = [
            'id' => $poll['id'],
            'name' => $poll['name']
        ];

        $max = 0;
        foreach ($poll['answers'] as $key => $answer) {
            if ($max < intval($answer)) {
                $max = intval($answer);
            }
        }

        $index = 0;
        $arr = array_keys($poll['options']);
        foreach ($poll['answers'] as $key => $answer) {
            $result['items'][$index] = [
                'count' => $answer,
                'value' => $poll['options'][$arr[$index]],
                'percent' => round(intval($answer) * 100 / $max)
            ];
            $index++;
        }

        return $result;
    }

    private function pollPassed($pollId)
    {
        $polls = unserialize(
            \UW\Tools::getCookie(
                $this->arParams['COOKIE_NAME']
            )
        );

        return in_array($pollId, $polls);
    }

    private function getData()
    {
        if ($this->pollPassed($this->arParams['ELEMENT_ID'])) {
            $this->arResult['answers'] = $this->getResults();
        } else {
            $this->arResult['poll'] = $this->getPoll();
        }

        return $this;
    }

    public function executeComponent()
    {
        $request = $this->request;

        if ($request->get('set-answer')) {
            $this->setAnswer(
                $request->get('poll-id'),
                $request->get('option')
            );
        } else {
            $this->getData();
        }

        $this->arResult['listLink'] = $this->arParams['LIST'];

        $this->IncludeComponentTemplate();
    }
}