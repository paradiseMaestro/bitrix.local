<?php 


$sectionInfo = [];

$filter = [];
$filter['IBLOCK_ID'] =  (int)$arResult['ID'];
$filter['GLOBAL_ACTIVE'] =  'Y';
$filter['SECTION_ID'] =  (int)$arResult['SECTION']['PATH'][0]['ID'];
$filter['DEPTH_LEVEL'] =  2;

$getiblock = CIBlockSection::GetList(
    ['SORT' => 'ASC'],
    $filter
);
$arResult['SECTIONS'][] = $arResult['SECTION']['PATH'][0];
$arResult['SECTIONS'][0]['NAME'] = 'Все';
while ($sectionwhile = $getiblock->GetNext()) {
    $arResult['SECTIONS'][] = $sectionwhile;
//     $sectionInfo[$sectionwhile['ID']] = $sectionwhile['NAME'];
}



// $arResult["SECTION_NAMES"] = $sectionInfo;


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
// print_r($arResult['SECTIONS']);
echo '</pre>';

?>