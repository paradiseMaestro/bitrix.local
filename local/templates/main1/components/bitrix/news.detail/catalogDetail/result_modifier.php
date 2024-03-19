<?php 

$res = CIBlockElement::GetByID((int)$arResult['PROPERTIES']['brend']['VALUE']);
if($ar_res = $res->GetNext()){
	$arResult['PROPERTIES']['brend']['name_brend']= $ar_res['NAME'];
}

foreach ($arResult['PROPERTIES']['gallery']['VALUE'] as $item) {

    $arResult['PROPERTIES']['gallery']['src_images'][] = CFile::ResizeImageGet(
        $item,
        ['height' => 1200, 'weight' => 1200],
        BX_RESIZE_IMAGE_EXACT,
    );
}


echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '<pre>';
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($arResult);
echo '</pre>';



?>