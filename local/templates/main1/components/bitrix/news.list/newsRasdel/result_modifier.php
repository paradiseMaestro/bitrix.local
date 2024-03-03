<?php
// LIST_PAGE_URL


$getiblock = CIBlockSection::GetList(
	Array("SORT"=>"ASC"),
	Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'])
 );

 while($sectionwhile = $getiblock->GetNext())
{
	$arS[] = $sectionwhile;
}


$categories['all'] = 'Все';
foreach($arS as $key1=>$arSec){  

    $categories[  $arSec['CODE']  ] = $arSec['NAME'];
	foreach($arResult["ITEMS"] as $key2=>$arItem){
	// print_r($arItem);
		 

			
			if($_GET['catalog'] != 'all'){
                 // $arResult['ITEMS'] =  $arItem;
                // $arResult['ITEMS'][$key2]['DETAIL_LIST'] =  $arSec;
                // $Items[$key2] = $arItem;
                // $Items[$key2]['DETAIL_LIST'] =  $arSec;

                if($_GET['catalog'] == $arSec['CODE']){
                    // $arResult['ITEMS'] =  $arItem;
                    // $arResult['ITEMS'][$key2]['DETAIL_LIST'] =  $arSec;
                    $Items[$key2] = $arItem;
                    $Items[$key2]['DETAIL_LIST'] =  $arSec;
                }

            }
            else{
                if($arItem['IBLOCK_SECTION_ID'] == $arSec['ID']){
                    // $arResult['ITEMS'] =  $arItem;
                $arResult['ITEMS'][$key2]['DETAIL_LIST'] =  $arSec;
            }

		  }
	}
 }
$arParams['categories'] = $categories;
// echo '<pre>';
// print_r($arResult['ITEMS']);
if($_GET['catalog'] != 'all'){
    $arResult['ITEMS'] = $Items;
}

echo '<pre>';
print_r($arResult);

// arResult
echo '</pre>';
// print_r($_GET['catalog']);


// if($_GET['catalog'] != 'all'){

// }
?>