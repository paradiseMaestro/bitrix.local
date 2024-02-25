<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die;

use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
$asset->addCss(SITE_TEMPLATE_PATH."/590.css");
$asset->addCss(SITE_TEMPLATE_PATH."/app.css");

$asset->addJs(SITE_TEMPLATE_PATH."/assets/app.js");
$asset->addJs(SITE_TEMPLATE_PATH."/assets/vendor.js");

$asset->addString('<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">');

