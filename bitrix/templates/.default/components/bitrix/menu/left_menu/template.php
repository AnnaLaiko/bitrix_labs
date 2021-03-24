<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="sb_nav">
<ul>
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
    <?php //dump($arItem); ?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="<?if ($arItem["SELECTED"]):?>open current<?else:?>close<?endif?>" onclick="this.className = (this.className.includes('open') ? this.className.replace('open','close') : this.className.replace('close','open'))">
                <span class="sb_showchild"></span>
                <a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
                <ul class="">
		<?else:?>
                    <li class="<?if ($arItem["SELECTED"]):?>open current<?else:?>close<?endif?>" onclick="this.className = (this.className.includes('open') ? this.className.replace('open','close') : this.className.replace('close','open'))">
                <span class="sb_showchild"></span>
                <a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
                <ul class="">
		<?endif?>

	<?else:?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li class="close <?if ($arItem["SELECTED"]):?>current<?endif;?>"><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
			<?else:?>
            <li class="close <?if ($arItem["SELECTED"]):?>current<?endif;?>"><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
			<?endif?>
	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
</ul>
</div>
<?endif?>
