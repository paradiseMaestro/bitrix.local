<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>Пустая страница. <a href="/bitrix/admin/">Перейти в Панель &nbsp;Управления</a>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<h1>sdfgsf</h1>
<?php 

	// echo '<pre>';
	// var_dump(SITE_TEMPLATE_PATH);
	// echo '</pre>';

?>
<?$APPLICATION->IncludeComponent("bitrix:menu", "template2", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "template2"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>