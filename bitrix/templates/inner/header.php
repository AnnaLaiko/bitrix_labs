<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<html lang=<?=LANG_CHARSET?>>
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>

    <?$APPLICATION->AddHeadScript(SITE_DIR."bitrix/templates/.default/js/functions.js");?>

    <?$APPLICATION->SetAdditionalCSS(SITE_DIR."bitrix/templates/.default/template_style.css");?>

    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
        <?require_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/templates/.default/include/header.php")?>

    <!--- // end header area --->
    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "nav", Array(
        "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
        "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
        "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
    ),
        false
    );?>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title"><?$APPLICATION->ShowTitle(false)?></p>
                    </div>
                    <!-- workarea -->