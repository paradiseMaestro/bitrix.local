<?



'hhhhhhhhhhhhhhhhhhhhhhhhhhh'




require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>



<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"template2",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("ID","NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_PICTURE",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>





<? $APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"catalog", 
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "slider",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "DESCRIPTION",
			2 => "PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "DATE_CREATE",
			5 => "TIMESTAMP_X",
			6 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_COLOR",
			1 => "Выбор цвета",
			2 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "catalog"
	),
	false
); ?>











<section class="main-traditions container-fluid" data-aos="fade-up" data-aos-duration="1500">
  <div class="main-traditions__bg">
    <svg width="1920" height="1390" viewbox="0 0 1920 1390" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_112_14072)">
        <path d="M852.866 1631.13C893.576 1133.75 1140.32 88.0227 2485.18 0.229725C2579.7 -5.78834 2629.96 107.847 2562.7 175.108L1027.74 1710.42C959.773 1778.75 845.078 1726.35 852.866 1631.13Z" fill="#EAF3FF"></path>
        <path d="M-573.419 1.29304C-76.0432 42.3575 969.683 288.744 1057.48 1633.6C1063.49 1728.12 949.861 1778.39 882.6 1711.13L-652.715 176.171C-721.038 108.202 -668.646 -6.49505 -573.419 1.29304Z" fill="#EAF3FF"></path>
      </g>
      <defs>
        <clippath id="clip0_112_14072">
          <rect width="1920" height="1390" fill="white"></rect>
        </clippath>
      </defs>
    </svg>
  </div>
  <div class="container" data-aos="fade-up" data-aos-duration="1500">
    <div class="main-traditions__logo">
      <svg xmlns="http://www.w3.org/2000/svg" width="143" height="75" viewbox="0 0 143 75" fill="none">
        <path d="M0 11.3017L4.19833 10.6986C4.26064 11.2899 4.4943 11.7599 4.89154 12.1084C5.28879 12.4569 5.81844 12.6331 6.46883 12.6331C6.99459 12.6331 7.43468 12.4961 7.79298 12.222C8.15128 11.9478 8.33043 11.5876 8.33043 11.1411C8.33043 10.6947 8.12401 10.3383 7.71509 10.0642C7.30616 9.7901 6.78429 9.65305 6.15337 9.65305H5.207V6.28916H6.15337C7.37236 6.28916 7.98381 5.80358 7.98381 4.82848C7.98381 4.44863 7.83193 4.14319 7.52426 3.90822C7.22048 3.67718 6.81545 3.55969 6.30916 3.55969C5.84571 3.55969 5.4368 3.69675 5.0785 3.97087C4.7202 4.24499 4.49821 4.62484 4.41642 5.11435L0.630914 4.06485C1.00868 2.79605 1.68635 1.80138 2.66778 1.08083C3.64531 0.360279 4.90324 0 6.43769 0C8.1435 0 9.51047 0.379873 10.5386 1.1435C11.5707 1.90321 12.0848 2.89005 12.0848 4.09619C12.0848 5.61952 11.4227 6.81393 10.0946 7.68329C10.9164 8.02007 11.5824 8.51741 12.1003 9.1753C12.6144 9.82928 12.8754 10.5929 12.8754 11.4583C12.8754 13.0678 12.2912 14.3092 11.1228 15.1864C9.95445 16.0636 8.40442 16.5022 6.46883 16.5022C4.59555 16.5022 3.08836 16.0245 1.93947 15.0729C0.790584 14.1252 0.144098 12.8681 0 11.3017Z" fill="#F64653"></path>
        <path d="M13.7749 19.8703V12.0656H15.5742C16.1194 11.2002 16.4777 9.97055 16.6491 8.38456L17.4085 0.262695H30.4747V12.0656H32.6829V19.8703H28.3911V16.2519H18.0706V19.8703H13.7749ZM20.0256 12.0656H25.4235V4.44894H21.3537L20.8785 9.0816C20.7072 10.4131 20.4229 11.4077 20.0256 12.0656Z" fill="#F64653"></path>
        <path d="M35.526 14.1565C34.0305 12.5901 33.2866 10.6242 33.2866 8.25499C33.2866 5.88579 34.0344 3.91993 35.526 2.35352C37.0215 0.787101 39.07 0.0078125 41.6794 0.0078125C44.2887 0.0078125 46.3372 0.791017 47.8327 2.35352C49.3282 3.91993 50.0721 5.88579 50.0721 8.25499C50.0721 10.6242 49.3243 12.5901 47.8327 14.1565C46.3372 15.7229 44.2887 16.5061 41.6794 16.5061C39.07 16.5061 37.0176 15.7229 35.526 14.1565ZM44.0784 11.0628C44.6236 10.3971 44.9001 9.46113 44.9001 8.25499C44.9001 7.04885 44.6275 6.11293 44.0784 5.4472C43.5293 4.78147 42.7309 4.44861 41.6794 4.44861C40.6278 4.44861 39.8255 4.78147 39.2803 5.4472C38.7312 6.11293 38.4586 7.04885 38.4586 8.25499C38.4586 9.46113 38.7312 10.3971 39.2803 11.0628C39.8255 11.7285 40.6278 12.0614 41.6794 12.0614C42.7309 12.0653 43.5293 11.7324 44.0784 11.0628Z" fill="#F64653"></path>
        <path d="M71.4374 14.1565C69.9419 12.5901 69.198 10.6242 69.198 8.25499C69.198 5.88579 69.9458 3.91993 71.4374 2.35352C72.9329 0.787101 74.9814 0.0078125 77.5907 0.0078125C80.2001 0.0078125 82.2486 0.791017 83.7441 2.35352C85.2396 3.91993 85.9835 5.88579 85.9835 8.25499C85.9835 10.6242 85.2357 12.5901 83.7441 14.1565C82.2486 15.7229 80.2001 16.5061 77.5907 16.5061C74.9814 16.5061 72.929 15.7229 71.4374 14.1565ZM79.9859 11.0628C80.5311 10.3971 80.8076 9.46113 80.8076 8.25499C80.8076 7.04885 80.535 6.11293 79.9859 5.4472C79.4368 4.78147 78.6384 4.44861 77.5869 4.44861C76.5353 4.44861 75.733 4.78147 75.1878 5.4472C74.6387 6.11293 74.3661 7.04885 74.3661 8.25499C74.3661 9.46113 74.6387 10.3971 75.1878 11.0628C75.733 11.7285 76.5353 12.0614 77.5869 12.0614C78.6423 12.0653 79.4406 11.7324 79.9859 11.0628Z" fill="#F64653"></path>
        <path d="M87.9658 16.2519V0.258789H95.5407C97.1803 0.258789 98.485 0.634731 99.4547 1.38661C100.421 2.13849 100.907 3.16839 100.907 4.48027C100.907 5.72948 100.401 6.74375 99.3924 7.52696C100.234 7.97339 100.845 8.49422 101.223 9.09729C101.601 9.70036 101.791 10.5188 101.791 11.5566C101.791 13.0995 101.324 14.2704 100.386 15.0614C99.4508 15.8564 98.1189 16.2519 96.3936 16.2519H87.9658ZM92.982 6.03495H94.8436C95.8328 6.03495 96.3274 5.63159 96.3274 4.8288C96.3274 4.02601 95.8328 3.62265 94.8436 3.62265H92.982V6.03495ZM92.982 12.5708H95.1591C96.4014 12.5708 97.0206 12.0852 97.0206 11.1101C97.0206 10.139 96.4014 9.64944 95.1591 9.64944H92.982V12.5708Z" fill="#F64653"></path>
        <path d="M103.969 16.2519V0.258789H109.145V5.33399H112.046C113.896 5.33399 115.36 5.81173 116.431 6.76333C117.502 7.71492 118.04 9.05812 118.04 10.7929C118.04 12.5277 117.502 13.8709 116.431 14.8225C115.356 15.7741 113.896 16.2519 112.046 16.2519H103.969ZM109.145 12.4455H111.166C112.428 12.4455 113.059 11.8972 113.059 10.7968C113.059 9.69643 112.428 9.1482 111.166 9.1482H109.145V12.4455ZM119.718 0.258789H124.894V16.2519H119.718V0.258789Z" fill="#F64653"></path>
        <path d="M142.743 7.9378V9.84099H132.013C132.477 11.4701 133.528 12.2846 135.168 12.2846C135.904 12.2846 136.519 12.1436 137.014 11.8578C137.508 11.5719 137.964 11.0785 138.389 10.3814L142.49 11.8421C141.08 14.9514 138.564 16.5061 134.946 16.5061C132.379 16.5061 130.401 15.6877 129.014 14.0468C127.624 12.406 126.931 10.4754 126.931 8.255C126.931 6.03461 127.624 4.10401 129.014 2.46319C130.401 0.826286 132.379 0.00390625 134.946 0.00390625C136.313 0.00390625 137.512 0.234964 138.544 0.700973C139.576 1.16698 140.387 1.78962 140.975 2.57283C141.563 3.35603 142.007 4.19798 142.299 5.09476C142.599 5.99936 142.743 6.94313 142.743 7.9378ZM132.079 6.2265H137.855C137.769 5.50595 137.47 4.91854 136.955 4.46428C136.441 4.01002 135.772 3.78289 134.95 3.78289C133.497 3.78289 132.539 4.59743 132.079 6.2265Z" fill="#F64653"></path>
        <path d="M1.07104 43.5264V27.5333H16.1546V43.5264H10.9788V31.7235H6.24691V43.5264H1.07104Z" fill="#F64653"></path>
        <path d="M38.4508 41.4319C36.9553 39.8654 36.2114 37.8996 36.2114 35.5304C36.2114 33.1612 36.9592 31.1953 38.4508 29.6289C39.9463 28.0625 41.9948 27.2832 44.6042 27.2832C47.2135 27.2832 49.262 28.0664 50.7576 29.6289C52.2531 31.1953 52.9969 33.1612 52.9969 35.5304C52.9969 37.8996 52.2492 39.8654 50.7576 41.4319C49.262 42.9983 47.2135 43.7815 44.6042 43.7815C41.9948 43.7815 39.9424 42.9983 38.4508 41.4319ZM47.0032 38.3382C47.5484 37.6725 47.825 36.7365 47.825 35.5304C47.825 34.3242 47.5523 33.3883 47.0032 32.7226C46.4541 32.0568 45.6557 31.724 44.6042 31.724C43.5527 31.724 42.7504 32.0568 42.2051 32.7226C41.656 33.3883 41.3834 34.3242 41.3834 35.5304C41.3834 36.7365 41.656 37.6725 42.2051 38.3382C42.7504 39.0039 43.5527 39.3368 44.6042 39.3368C45.6557 39.3407 46.4541 39.0078 47.0032 38.3382Z" fill="#F64653"></path>
        <path d="M53.6042 47.1448V39.3402H55.4035C55.9488 38.4747 56.3071 37.2451 56.4784 35.6591L57.2379 27.5372H70.304V39.3402H72.5122V47.1448H68.2205V43.5264H57.8999V47.1448H53.6042ZM59.8511 39.3402H65.2489V31.7235H61.1791L60.704 36.3562C60.5365 37.6876 60.2522 38.6823 59.8511 39.3402Z" fill="#F64653"></path>
        <path d="M88.9124 43.5264V27.5333H94.0882V32.9296L97.9983 27.5333H104.187L98.3488 34.8015L104.596 43.5264H98.4423L94.0882 37.0219V43.5264H88.9124Z" fill="#F64653"></path>
        <path d="M109.269 43.5264V31.7235H104.818V27.5333H118.893V31.7235H114.445V43.5264H109.269Z" fill="#F64653"></path>
        <path d="M120.209 43.5264V27.5333H125.385V32.6085H128.29C130.14 32.6085 131.604 33.0863 132.675 34.0379C133.75 34.9895 134.284 36.3327 134.284 38.0675C134.284 39.8023 133.746 41.1455 132.675 42.0971C131.6 43.0487 130.14 43.5264 128.29 43.5264H120.209ZM125.385 39.7201H127.406C128.668 39.7201 129.299 39.1718 129.299 38.0714C129.299 36.971 128.668 36.4227 127.406 36.4227H125.385V39.7201ZM135.954 27.5333H141.13V43.5264H135.954V27.5333Z" fill="#F64653"></path>
        <path d="M33.1581 29.5188C31.9079 28.0267 30.2605 27.5333 28.2198 27.5333H19.0676V49.9997H24.2435V43.5264V42.5748C24.9795 43.3776 26.1362 43.781 27.7135 43.781C29.8594 43.781 31.6158 43.0291 32.9828 41.5293C34.3498 40.0294 35.0352 38.0283 35.0352 35.5338C35.0352 33.0158 34.4082 31.0108 33.1581 29.5188ZM29.1817 38.369C28.6443 39.0152 27.9121 39.3363 26.9891 39.3363C26.0622 39.3363 25.3339 39.0152 24.7965 38.369C24.259 37.7229 23.9903 36.7791 23.9903 35.5299C23.9903 35.526 23.9903 35.522 23.9903 35.5142V31.7196H26.9891C27.916 31.7196 28.6443 32.0407 29.1817 32.6868C29.7192 33.333 29.9879 34.2807 29.9879 35.526C29.9879 36.7791 29.7192 37.7268 29.1817 38.369Z" fill="#F64653"></path>
        <path d="M66.1446 2.11507C64.8945 0.623062 63.2471 0.129639 61.2064 0.129639H52.0542V22.596H57.23V16.1228V15.1712C57.9661 15.9739 59.1228 16.3773 60.7001 16.3773C62.846 16.3773 64.6024 15.6254 65.9694 14.1256C67.3364 12.6257 68.0218 10.6246 68.0218 8.1301C68.0218 5.61209 67.3948 3.60708 66.1446 2.11507ZM62.1683 10.9692C61.6309 11.6154 60.8987 11.9365 59.9757 11.9365C59.0527 11.9365 58.3205 11.6154 57.7831 10.9692C57.2456 10.3231 56.9769 9.37932 56.9769 8.1301C56.9769 8.12619 56.9769 8.12228 56.9769 8.11445V4.31981H59.9757C60.9026 4.31981 61.6309 4.64091 62.1683 5.28706C62.7058 5.9332 62.9745 6.88088 62.9745 8.12618C62.9745 9.37932 62.7058 10.3231 62.1683 10.9692Z" fill="#F64653"></path>
        <path d="M74.6661 49.9997H79.5265L87.7946 27.5333H82.8096L80.0016 35.3067L77.0963 27.5333H71.7646L77.474 42.2576L74.6661 49.9997Z" fill="#F64653"></path>
        <path d="M64.7476 71.8898C70.6022 78.5652 80.9906 72.0671 78.3343 70.4807C78.1158 70.3508 77.8612 70.2924 77.6077 70.2916C75.7982 70.2904 65.3927 70.2811 65.3927 70.2811C64.5521 70.2809 64.1373 71.3078 64.7476 71.8898Z" fill="#F64653"></path>
      </svg>
    </div>
    <div class="main-traditions__top">
      <h3 class="main-traditions__title animation-title" data-splitting data-effect1>
        <?php
$APPLICATION->IncludeComponent(
"bitrix:main.include",
"template1",
array(
"AREA_FILE_SHOW" => "file",  // Показывать включаемую область
"PATH" => SITE_TEMPLATE_PATH . "/include/templ/main_page.php",  // Путь к файлу области
),
false
        );
        ?>
      </h3>
      <div class="title-rombs">
        <div class="title-rombs__item">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
            <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
            <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
            <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
            <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
          </svg>
        </div>
        <div class="title-rombs__item">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
            <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
            <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
            <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
            <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
          </svg>
        </div>
      </div>
    </div>
    <div class="main-traditions__row">
      <div class="main-traditions__col">
        <div class="main-traditions__text">
          <?php
          $APPLICATION->IncludeComponent("bitrix:main.include", "template1", Array(
          "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
          "PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page4.php",	// Путь к файлу области
          ),
          false
          );
          ?>
        </div>
        <a class="main-traditions__button btn-hover_parent desktop" href="/about_company">
          <div class="btn-hover_circle"></div>
          <span>
          <?php
    $APPLICATION->IncludeComponent("bitrix:main.include", "template1", Array(
    "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
    "PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page6.php",	// Путь к файлу области
    ),
    false
    );
?>
          </span>
        </a>
      </div>
      <div class="main-traditions__col">
        <div class="main-traditions__text">
          <?php
          $APPLICATION->IncludeComponent("bitrix:main.include", "template1", Array(
          "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
          "PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page5.php",	// Путь к файлу области
          ),
          false
          );
          ?>
        </div>
        <a class="main-traditions__button btn-hover_parent mobile" href="/about_company/">
          <div class="btn-hover_circle"></div>
          <span>
              <?php
              $APPLICATION->IncludeComponent("bitrix:main.include", "template1", Array(
              "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
              "PATH" => SITE_TEMPLATE_PATH."/include/templ/main_page6.php",	// Путь к файлу области
              ),
              false
              );
              ?>
          </span>
        </a>
      </div>
    </div>
    <div class="main-traditions__video" data-button-fade="main-video">
      <div class="main-traditions__video-bg">
        <svg width="1840" height="700" viewbox="0 0 1840 700" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g style="mix-blend-mode: soft-light;" opacity="0.7">
            <path d="M812.647 942.126C853.357 444.751 1100.1 -600.977 2444.96 -688.77C2539.48 -694.788 2589.74 -581.153 2522.48 -513.892L987.522 1021.42C919.554 1089.75 804.858 1037.35 812.647 942.126Z" fill="black"></path>
            <path d="M-613.638 -687.707C-116.262 -646.643 929.464 -400.256 1017.26 944.605C1023.27 1039.12 909.641 1089.39 842.381 1022.13L-692.935 -512.829C-761.257 -580.798 -708.865 -695.495 -613.638 -687.707Z" fill="black"></path>
          </g>
        </svg>
      </div>
      <div class="main-traditions__video-video">
        <video src="<?php echo SITE_TEMPLATE_PATH ?>/assets/videos/zp_preview.mp4" loop muted playsinline autoplay preload="none"></video>
      </div>
      <div class="main-traditions__video-button">
        <svg width="576" height="202" viewbox="0 0 576 202" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M36.408 72.16C26.568 72.16 18.04 68.9347 10.824 62.484C3.608 56.0333 0 47.1773 0 35.916C0 25.2013 3.49866 16.564 10.496 10.004C17.6027 3.33467 26.404 0 36.9 0C47.5053 0 56.3067 3.06134 63.304 9.18401L53.628 23.288C49.5827 19.8987 44.8813 18.204 39.524 18.204C34.604 18.204 30.504 19.844 27.224 23.124C23.944 26.2947 22.304 30.6133 22.304 36.08C22.304 41.5467 23.8893 45.8653 27.06 49.036C30.34 52.0973 34.3307 53.628 39.032 53.628C44.8267 53.628 49.9653 51.6053 54.448 47.56L65.272 61.008C60.8987 65.0533 56.5253 67.9507 52.152 69.7C47.888 71.34 42.64 72.16 36.408 72.16Z" fill="white"></path>
          <path d="M148.792 1.968L154.368 69.864H129.112L127.964 49.856C127.854 49.2 127.745 48.1067 127.636 46.576C127.636 45.0453 127.636 43.8973 127.636 43.132C125.777 45.6467 123.973 47.9427 122.224 50.02L114.352 58.876H109.104L101.396 49.856C100.958 49.3093 100.138 48.3253 98.9356 46.904C97.7329 45.3733 96.8036 44.1707 96.1476 43.296L95.6556 49.692L94.1796 69.864H69.0876L75.4836 1.968H84.5036L105.004 24.436C107.081 26.732 109.322 29.3013 111.728 32.144C113.149 30.3947 115.39 27.88 118.452 24.6L139.772 1.968H148.792Z" fill="white"></path>
          <path d="M195.888 72.16C184.736 72.16 175.606 68.8253 168.5 62.156C161.502 55.3773 158.004 46.6853 158.004 36.08C158.004 25.4747 161.502 16.8373 168.5 10.168C175.606 3.38934 184.736 0 195.888 0C206.93 0 216.005 3.38934 223.112 10.168C230.218 16.8373 233.772 25.4747 233.772 36.08C233.772 46.6853 230.218 55.3773 223.112 62.156C216.005 68.8253 206.93 72.16 195.888 72.16Z" fill="white"></path>
          <path d="M252.273 69.864V20.5H234.069V2.132H292.945V20.5H274.577V69.864H252.273Z" fill="white"></path>
          <path d="M341.771 0.328003C351.064 0.328003 358.718 3.66267 364.731 10.332C370.744 17.0013 373.751 25.3653 373.751 35.424C373.751 46.248 370.799 55.0493 364.895 61.828C358.991 68.4973 351.338 71.832 341.935 71.832C333.407 71.832 326.355 69.044 320.779 63.468C321.107 68.8253 321.271 74.456 321.271 80.36V105.944H299.295V2.132H313.563L317.827 12.464C323.84 4.37333 331.822 0.328003 341.771 0.328003ZM336.359 53.464C340.842 53.464 344.45 51.8787 347.183 48.708C350.026 45.5373 351.447 41.3827 351.447 36.244C351.447 30.8867 350.08 26.6227 347.347 23.452C344.614 20.2813 340.951 18.696 336.359 18.696C331.548 18.696 327.667 20.2267 324.715 23.288C321.872 26.3493 320.451 30.504 320.451 35.752C320.451 41.1093 321.872 45.428 324.715 48.708C327.667 51.8787 331.548 53.464 336.359 53.464Z" fill="white"></path>
          <path d="M414.917 0C424.539 0 432.137 3.00667 437.713 9.02C443.399 15.0333 446.241 23.2333 446.241 33.62C446.241 36.9 446.023 39.9067 445.585 42.64H400.321C402.727 51.2773 409.177 55.596 419.673 55.596C426.561 55.596 432.028 53.8467 436.073 50.348L443.617 64.124C435.417 69.4813 426.452 72.16 416.721 72.16C405.351 72.16 396.167 68.8253 389.169 62.156C382.172 55.4867 378.673 46.7947 378.673 36.08C378.673 25.6933 382.063 17.1107 388.841 10.332C395.729 3.444 404.421 0 414.917 0ZM423.117 19.68C420.821 17.384 417.869 16.236 414.261 16.236C410.653 16.236 407.537 17.4387 404.913 19.844C402.399 22.14 400.759 25.4747 399.993 29.848H426.725C426.616 25.3653 425.413 21.976 423.117 19.68Z" fill="white"></path>
          <path d="M465.576 69.864V20.5H447.372V2.132H506.248V20.5H487.88V69.864H465.576Z" fill="white"></path>
          <path d="M550.481 22.304C558.244 22.304 564.421 24.4907 569.013 28.864C573.605 33.128 575.901 38.868 575.901 46.084C575.901 53.5187 573.605 59.368 569.013 63.632C564.421 67.7867 558.244 69.864 550.481 69.864H512.597V2.132H534.901V22.304H550.481ZM544.085 54.94C547.365 54.94 549.935 54.1747 551.793 52.644C553.652 51.004 554.581 48.8173 554.581 46.084C554.581 40.18 551.083 37.228 544.085 37.228H534.901V54.94H544.085Z" fill="white"></path>
          <path d="M153.145 150.096C160.361 152.939 163.969 158.241 163.969 166.004C163.969 171.908 161.946 176.555 157.901 179.944C153.855 183.224 148.334 184.864 141.337 184.864H101.813V117.132H139.041C145.71 117.132 151.013 118.772 154.949 122.052C158.994 125.332 161.017 129.76 161.017 135.336C161.017 142.005 158.393 146.925 153.145 150.096ZM132.645 130.908H122.969V144.684H132.645C137.893 144.684 140.517 142.333 140.517 137.632C140.517 133.149 137.893 130.908 132.645 130.908ZM134.121 171.088C139.587 171.088 142.321 168.737 142.321 164.036C142.321 159.335 139.587 156.984 134.121 156.984H122.969V171.088H134.121Z" fill="white"></path>
          <path d="M227.586 116.968H235.622V184.864H214.302V159.936C214.302 156.437 214.357 153.813 214.466 152.064C213.373 153.376 211.569 155.289 209.055 157.804L180.682 185.028H172.646V117.132H193.966V141.404C193.966 144.684 193.912 147.144 193.802 148.784C195.114 147.253 197.192 145.176 200.034 142.552L227.586 116.968Z" fill="white"></path>
          <path d="M312.234 167.644H322.238V201.92H302.722V184.864H261.394V201.92H241.878V167.644H250.734C253.467 163.052 255.162 156.765 255.818 148.784L258.606 117.132H312.234V167.644ZM277.302 133.696L275.498 152.064C274.842 158.952 273.639 164.255 271.89 167.972H292.062V133.696H277.302Z" fill="white"></path>
          <path d="M360.865 115C370.486 115 378.085 118.007 383.661 124.02C389.346 130.033 392.189 138.233 392.189 148.62C392.189 151.9 391.97 154.907 391.533 157.64H346.269C348.674 166.277 355.125 170.596 365.621 170.596C372.509 170.596 377.975 168.847 382.021 165.348L389.565 179.124C381.365 184.481 372.399 187.16 362.669 187.16C351.298 187.16 342.114 183.825 335.117 177.156C328.119 170.487 324.621 161.795 324.621 151.08C324.621 140.693 328.01 132.111 334.789 125.332C341.677 118.444 350.369 115 360.865 115ZM369.065 134.68C366.769 132.384 363.817 131.236 360.209 131.236C356.601 131.236 353.485 132.439 350.861 134.844C348.346 137.14 346.706 140.475 345.941 144.848H372.673C372.563 140.365 371.361 136.976 369.065 134.68Z" fill="white"></path>
          <path d="M434.3 187.16C423.148 187.16 414.018 183.825 406.912 177.156C399.914 170.377 396.416 161.685 396.416 151.08C396.416 140.475 399.914 131.837 406.912 125.168C414.018 118.389 423.148 115 434.3 115C445.342 115 454.417 118.389 461.524 125.168C468.63 131.837 472.184 140.475 472.184 151.08C472.184 161.685 468.63 170.377 461.524 177.156C454.417 183.825 445.342 187.16 434.3 187.16ZM422.984 163.872C425.826 167.043 429.598 168.628 434.3 168.628C439.001 168.628 442.773 167.043 445.616 163.872C448.458 160.592 449.88 156.328 449.88 151.08C449.88 145.832 448.458 141.623 445.616 138.452C442.773 135.172 439.001 133.532 434.3 133.532C429.598 133.532 425.826 135.172 422.984 138.452C420.141 141.623 418.72 145.832 418.72 151.08C418.72 156.328 420.141 160.592 422.984 163.872Z" fill="white"></path>
          <path d="M186 34.4569L186 29.6989C186 24.5643 191.893 21.6638 195.962 24.7959L204.335 31.2413C207.552 33.7182 207.552 38.5705 204.335 41.0473L195.962 47.4928C191.893 50.6249 186 47.7244 186 42.5898L186 37.8319L186 34.4569Z" fill="#0068FF"></path>
        </svg>
      </div>
    </div>
  </div>
</section>
<section class="main-filials container" data-aos="fade-up" data-aos-duration="1500">
  <div class="main-filials__landscape" data-aos="fade-up" data-aos-duration="1500">
    <div class="main-filials__landscape-bg desktop">
      <picture class="picture">
        <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg.webp" />
        <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg.png" />
      </picture>
    </div>
    <div class="main-filials__landscape-bg devices">
      <picture class="picture">
        <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg-device.webp" />
        <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg-device.png" />
      </picture>
    </div>
    <div class="main-filials__landscape-bg mobile-mob">
      <picture class="picture">
        <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg-mobile.webp" />
        <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-bg-mobile.png" />
      </picture>
    </div>
    <div class="main-filials__landscape-top">
      <div class="title-rombs">
        <div class="title-rombs__item">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
            <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
            <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
            <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
            <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
          </svg>
        </div>
        <div class="title-rombs__item">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
            <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
            <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
            <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
            <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
          </svg>
        </div>
      </div>
    </div>
    <h2 class="main-filials__landscape-title animation-title" data-splitting data-effect1>
      <?php
      $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "template1",
        array(
          "AREA_FILE_SHOW" => "file",  // Показывать включаемую область
          "PATH" => SITE_TEMPLATE_PATH . "/include/templ/main_page1.php",  // Путь к файлу области
        ),
        false
      );
      ?>

    </h2>
    <div class="main-filials__landscape-content">
      <div class="main-filials__landscape-text">
        <?php
        $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "template1",
          array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH . "/include/templ/main_page2.php",
          )
        );
        ?>
      </div>
      <div class="main-filials__landscape-desk">Присоединяйтесь к нам!</div>
      <a class="main-filials__landscape-button btn-hover_parent" href="/for_partners/">
        <div class="btn-hover_circle white"></div>
        <p>Подробнее о сотрудничестве</p>
      </a>
    </div>
  </div>
  <div class="main-filials__bottom" data-aos="fade-up" data-aos-duration="1500">
    <a class="main-filials__card where-buy btn-hover_parent" href="/where_to_buy">
      <div class="main-filials__card-top">
        <div class="main-filials__card-title">где купить</div>
        <div class="main-filials__card-text">
          Локальные, федеральные сети и&nbsp;маркетплейсы
        </div>
      </div>
      <div class="main-filials__card-bot">
        <div class="main-filials__card-row">
          <div class="main-filials__card-icons">
            <picture class="picture">
              <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-card-icons1.webp" />
              <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-card-icons1.png" />
            </picture>
          </div>
          <div class="button button-arrow_right btn-hover_parent">
            <div class="btn-hover_circle total-white"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
              <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
            </svg>
          </div>
        </div>
      </div>
    </a><a class="main-filials__card game btn-hover_parent" href="#" target="blank">
      <div class="main-filials__card-bg">
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-game.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-game.png" />
        </picture>
      </div>
      <div class="main-filials__card-top">
        <div class="main-filials__card-title">мобильная игра</div>
        <div class="main-filials__card-text">
          Сёмыч и Ладушка спасают Снежландию
        </div>
      </div>
      <div class="main-filials__card-bot">
        <div class="main-filials__card-row">
          <div class="main-filials__card-icons short">
            <picture class="picture">
              <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-card-icons2.webp" />
              <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-filials-card-icons2.png" />
            </picture>
          </div>
          <div class="button button-arrow_right btn-hover_parent">
            <div class="btn-hover_circle total-white"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
              <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
            </svg>
          </div>
        </div>
      </div>
    </a>
  </div>
</section>
<section class="main-news" data-aos="fade-up" data-aos-duration="1500">
  <div class="container">
    <div class="main-news__top">
      <div class="main-news__title animation-title" data-splitting data-effect1>
        <span>новости </span><span>и </span><span>акции</span>
      </div>
      <div class="title-rombs">
        <div class="title-rombs__item">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
            <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
            <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
            <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
            <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
          </svg>
        </div>
        <div class="title-rombs__item">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
            <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
            <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
            <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
            <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
          </svg>
        </div>
      </div>
    </div>
    <div class="main-news__slider">
      <div class="main-news__slider-wrapper">
        <div class="swiper main-news__swiper">
          <div class="swiper-wrapper">
            <a class="swiper-slide main-news__card" href="#">
              <div class="main-news__card-img">
                <picture class="picture">
                  <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp" />
                  <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.png" />
                </picture><span class="main-news__card-plug">выставки и конференции</span>
              </div>
              <p class="main-news__card-date">6 марта 2023</p>
              <p class="main-news__card-title">
                Диетолог Снегирева рассказала, как выбрать правильное мороженое
              </p>
            </a><a class="swiper-slide main-news__card" href="#">
              <div class="main-news__card-img">
                <picture class="picture">
                  <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp" />
                  <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.png" />
                </picture><span class="main-news__card-plug">выставки и конференции</span>
              </div>
              <p class="main-news__card-date">6 марта 2023</p>
              <p class="main-news__card-title">
                Диетолог Снегирева рассказала, как выбрать правильное мороженое
              </p>
            </a><a class="swiper-slide main-news__card" href="#">
              <div class="main-news__card-img">
                <picture class="picture">
                  <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp" />
                  <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.png" />
                </picture><span class="main-news__card-plug">выставки и конференции</span>
              </div>
              <p class="main-news__card-date">6 марта 2023</p>
              <p class="main-news__card-title">
                Диетолог Снегирева рассказала, как выбрать правильное мороженое
              </p>
            </a><a class="swiper-slide main-news__card" href="#">
              <div class="main-news__card-img">
                <picture class="picture">
                  <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp" />
                  <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.png" />
                </picture><span class="main-news__card-plug">выставки и конференции</span>
              </div>
              <p class="main-news__card-date">6 марта 2023</p>
              <p class="main-news__card-title">
                Диетолог Снегирева рассказала, как выбрать правильное мороженое
              </p>
            </a><a class="swiper-slide main-news__card" href="#">
              <div class="main-news__card-img">
                <picture class="picture">
                  <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp" />
                  <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.png" />
                </picture><span class="main-news__card-plug">выставки и конференции</span>
              </div>
              <p class="main-news__card-date">6 марта 2023</p>
              <p class="main-news__card-title">
                Диетолог Снегирева рассказала, как выбрать правильное мороженое
              </p>
            </a>
          </div>
        </div>
      </div>
      <div class="slider-btn btn-hover_parent main-news__button_left">
        <div class="white-circle">
          <div class="btn-hover_circle total-white"></div>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
            <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
          </svg>
        </div>
      </div>
      <div class="slider-btn btn-hover_parent main-news__button_right">
        <div class="white-circle right">
          <div class="btn-hover_circle total-white"></div>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
            <path d="M16 10.8698L16 8.75515C16 6.47309 13.3808 5.18399 11.5725 6.57603L7.85123 9.44068C6.42121 10.5415 6.42121 12.6981 7.85124 13.7989L11.5725 16.6636C13.3808 18.0556 16 16.7665 16 14.4844L16 12.3698L16 10.8698Z" fill="#4F627D"></path>
          </svg>
        </div>
      </div>
    </div>
    <div class="main-news__bot">
      <a class="main-news__bot-button btn-hover_parent" href="/news_and_promotions/">
        <div class="btn-hover_circle"></div>
        <span>Все новости и акции</span>
      </a>
    </div>
  </div>
</section>





<div class="popup-video" data-popup-fade="main-video">
  <div class="popup-video__close" data-fade-close="main-video">
    <div class="btn-hover_parent">
      <div class="btn-hover_circle white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
        <path d="M6.69678 6.69671L17.3034 17.3033" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M6.69662 17.3033L17.3032 6.69671" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
    </div>
  </div>
  <div class="popup-video__inner">
    <div class="popup-video__video"><video class="zp-video" controls="controls" width="100%" height="100%" poster="./assets/images/about-production-popup-icecream.png" preload="none">
        <source src="<?php echo SITE_TEMPLATE_PATH ?>/assets/videos/video-zdor-product.mp4">
      </video></div>
  </div>
</div>


















<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>





<br>











<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>






<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>