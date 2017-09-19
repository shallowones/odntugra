<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arResult */
if(isset($arResult['info']["PREVIEW_PICTURE"]))
{
    if(($arResult['info']["PREVIEW_PICTURE"]["WIDTH"] >= 200) || ($arResult['info']["PREVIEW_PICTURE"]["HEIGHT"] >= 300))
    {
        $img = cFile::ResizeImageGet($arResult['info']["PREVIEW_PICTURE"],
            array("width" => 200, "height" => 300),
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true);
        $arResult['info']["PREVIEW_PICTURE"]["SRC_RESIZE"] = $img["src"];
    }
    else
    {
        $img = cFile::ResizeImageGet($arResult['info']["PREVIEW_PICTURE"],
            array("width" => $arResult['info']["PREVIEW_PICTURE"]["WIDTH"], "height" => $arResult['info']["PREVIEW_PICTURE"]["HEIGHT"]),
            BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
            true);
        $arResult["PREVIEW_PICTURE"]["SRC_RESIZE"] = $img["src"];
    }
}
?>