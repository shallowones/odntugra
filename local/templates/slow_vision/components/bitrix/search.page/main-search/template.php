<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="search-page">
    <form action="" method="get">
        <? if ($arParams["USE_SUGGEST"] === "Y"):
            if (strlen($arResult["REQUEST"]["~QUERY"]) && is_object($arResult["NAV_RESULT"])) {
                $arResult["FILTER_MD5"] = $arResult["NAV_RESULT"]->GetFilterMD5();
                $obSearchSuggest = new CSearchSuggest($arResult["FILTER_MD5"], $arResult["REQUEST"]["~QUERY"]);
                $obSearchSuggest->SetResultCount($arResult["NAV_RESULT"]->NavRecordCount);
            }
            ?>
        <? endif; ?>
        <? if ($arParams["SHOW_WHERE"]): ?>
            &nbsp;<select name="where">
                <option value=""><?= GetMessage("SEARCH_ALL") ?></option>
                <? foreach ($arResult["DROPDOWN"] as $key => $value): ?>
                    <option value="<?= $key ?>"<? if ($arResult["REQUEST"]["WHERE"] == $key) echo " selected" ?>><?= $value ?></option>
                <? endforeach ?>
            </select>
        <? endif; ?>
        <input type="hidden" name="how" value="<? echo $arResult["REQUEST"]["HOW"] == "d" ? "d" : "r" ?>"/>
    </form>
    <br/>

    <? if (isset($arResult["REQUEST"]["ORIGINAL_QUERY"])):
        ?>
        <div class="search-language-guess">
            <?
            echo GetMessage("CT_BSP_KEYBOARD_WARNING", array("#query#" => '<a href="' . $arResult["ORIGINAL_QUERY_URL"] . '">' . $arResult["REQUEST"]["ORIGINAL_QUERY"] . '</a>')) ?>
        </div><br/><?
    endif; ?>

    <? if ($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false): ?>
    <? elseif ($arResult["ERROR_CODE"] != 0): ?>
        <p><?= GetMessage("SEARCH_ERROR") ?></p>
        <? ShowError($arResult["ERROR_TEXT"]); ?>
        <p><?= GetMessage("SEARCH_CORRECT_AND_CONTINUE") ?></p>
        <br/><br/>
        <p><?= GetMessage("SEARCH_SINTAX") ?><br/><b><?= GetMessage("SEARCH_LOGIC") ?></b></p>
        <table border="0" cellpadding="5">
            <tr>
                <td align="center" valign="top"><?= GetMessage("SEARCH_OPERATOR") ?></td>
                <td valign="top"><?= GetMessage("SEARCH_SYNONIM") ?></td>
                <td><?= GetMessage("SEARCH_DESCRIPTION") ?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?= GetMessage("SEARCH_AND") ?></td>
                <td valign="top">and, &amp;, +</td>
                <td><?= GetMessage("SEARCH_AND_ALT") ?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?= GetMessage("SEARCH_OR") ?></td>
                <td valign="top">or, |</td>
                <td><?= GetMessage("SEARCH_OR_ALT") ?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?= GetMessage("SEARCH_NOT") ?></td>
                <td valign="top">not, ~</td>
                <td><?= GetMessage("SEARCH_NOT_ALT") ?></td>
            </tr>
            <tr>
                <td align="center" valign="top">( )</td>
                <td valign="top">&nbsp;</td>
                <td><?= GetMessage("SEARCH_BRACKETS_ALT") ?></td>
            </tr>
        </table>
    <? elseif (count($arResult["SEARCH"]) > 0): ?>
        <? if ($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"] ?>
        <br/>
        <div  >
            <? foreach ($arResult["SEARCH"] as $arItem): ?>
                <div class="main-news-item">
                        <div>
                            <a href="<? echo $arItem["URL"] ?>" class="main-news-item__title h4"><? echo $arItem["TITLE_FORMATED"] ?></a>
                            <div class="main-news-item__title"><? echo $arItem["BODY_FORMATED"] ?></div>
                            <div class="main-news-item__date"><?= $arItem["DATE_CHANGE"] ?></div>
                        </div>
                </div>
                <? if (
                    $arParams["SHOW_RATING"] == "Y"
                    && strlen($arItem["RATING_TYPE_ID"]) > 0
                    && $arItem["RATING_ENTITY_ID"] > 0
                ): ?>
                    <div class="search-item-rate"><?
                        $APPLICATION->IncludeComponent(
                            "bitrix:rating.vote", $arParams["RATING_TYPE"],
                            Array(
                                "ENTITY_TYPE_ID" => $arItem["RATING_TYPE_ID"],
                                "ENTITY_ID" => $arItem["RATING_ENTITY_ID"],
                                "OWNER_ID" => $arItem["USER_ID"],
                                "USER_VOTE" => $arItem["RATING_USER_VOTE_VALUE"],
                                "USER_HAS_VOTED" => $arItem["RATING_USER_VOTE_VALUE"] == 0 ? 'N' : 'Y',
                                "TOTAL_VOTES" => $arItem["RATING_TOTAL_VOTES"],
                                "TOTAL_POSITIVE_VOTES" => $arItem["RATING_TOTAL_POSITIVE_VOTES"],
                                "TOTAL_NEGATIVE_VOTES" => $arItem["RATING_TOTAL_NEGATIVE_VOTES"],
                                "TOTAL_VALUE" => $arItem["RATING_TOTAL_VALUE"],
                                "PATH_TO_USER_PROFILE" => $arParams["~PATH_TO_USER_PROFILE"],
                            ),
                            $component,
                            array("HIDE_ICONS" => "Y")
                        ); ?>
                    </div>
                <? endif; ?>
            <? endforeach; ?>
        </div>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"] ?>
        <br/>
    <? else: ?>
        <? ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND")); ?>
    <? endif; ?>
</div>