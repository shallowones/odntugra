<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
?>
<div style="display: inline">
    <div>
        <img alt="" src="<?=$arResult['info']['PREVIEW_PICTURE']['SRC_RESIZE']?>"
              title="" align="left" style="margin-right: 10px;">
    </div>
    <div>
        <? if ($arResult['info']['direk']):?>
            Директор: <?echo $arResult['info']['direk']?>
            <br><br>
        <?endif;?>
        <? if ($arResult['info']['address']):?>
            Адрес: <?echo $arResult['info']['address']?>
            <br><br>
        <?endif;?>
        <? if ($arResult['info']['phone']['tel']):?>
            <?foreach($arResult['info']['phone'] as $item):?>
                Тел. <?echo $item['tel']?> <br>
            <?endforeach;?>
            <br>
        <?endif;?>
        <? if ($arResult['info']['email']):?>
            E-mail:  <a href="mailto:<?echo $arResult['info']['email']?>"><?echo $arResult['info']['email']?></a>
            <br><br>
        <?endif;?>
        <? if ($arResult['info']['link']):?>
            Сайт:  <a href="<?echo $arResult['info']['link']?>"><?echo $arResult['info']['link']?></a>
            <br><br>
        <?endif;?>
        <? if ($arResult['info']['desc']):?>
            <?echo $arResult['info']['desc']?>
        <?endif;?>
    </div>
</div>