<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<html lang=<?=LANG_CHARSET?>>
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>

    <?$APPLICATION->AddHeadScript(SITE_DIR."bitrix/templates/.default/js/jquery-1.8.2.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_DIR."bitrix/templates/.default/js/slides.min.jquery.js");?>
    <?$APPLICATION->AddHeadScript(SITE_DIR."bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js");?>
    <?$APPLICATION->AddHeadScript(SITE_DIR."bitrix/templates/.default/js/functions.js");?>

    <?$APPLICATION->SetAdditionalCSS(SITE_DIR."bitrix/templates/.default/template_style.css");?>

    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
        <?require_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/header.php")?>
    </div>
