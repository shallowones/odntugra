<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<section class="menu-wrap">
		<div class="wrapper">
			<nav class="menu-sub">
				<?
				foreach($arResult as $arItem):
					?>
					<a href="<?=$arItem["LINK"]?>" class="menu-sub__link<?if($arItem["SELECTED"]):?> menu-sub__link_active<?endif;?>"><?=$arItem["TEXT"]?></a>
				<?endforeach?>

			</nav>
		</div>
	</section>
<?endif?>