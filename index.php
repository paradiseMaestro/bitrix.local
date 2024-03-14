<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");



?>

<?php require($_SERVER['DOCUMENT_ROOT']. SITE_TEMPLATE_PATH. "/pages/main.php"); ?>

<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"breadcrumbNews", 
	array(
		"COMPONENT_TEMPLATE" => "breadcrumbNews",
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1"
	),
	false
);?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>