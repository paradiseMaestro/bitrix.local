<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
// $APPLICATION->SetTitle("Название_в_хлебных_крошках");


echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '<a href="/catalog/">      КАТАЛОГ    </a>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '<a href="/catalog/">      МОРОЖЕННОЕ    </a>';
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