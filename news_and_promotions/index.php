<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости и акции");
?>

<section class="top-section">
	<section class="news-content container">
		<div class="breadcrumbs">
			<div class="breadcrumbs-wrapper">
				<div class="breadcrumbs-wrapper__row"><a class="breadcrumbs__item" href="#">главная</a>
					<div class="breadcrumbs__arrow"><svg width="9" height="14" viewbox="0 0 9 14" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z"
								fill="#F64653"></path>
							<path
								d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z"
								fill="#F64653"></path>
						</svg></div>
					<div class="breadcrumbs__current active">новости и акции</div>
				</div>
			</div>
		</div>
		<div class="news-content__top">
			<h1 class="news-content__title">новости и акции</h1>
			<div class="title-rombs">
				<div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
						viewbox="0 0 20 20" fill="none">
						<path
							d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
							fill="#F64653"></path>
						<path
							d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
							fill="#F64653"></path>
						<path
							d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
							fill="#F64653"></path>
						<path
							d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
							fill="#F64653"></path>
					</svg></div>
				<div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
						viewbox="0 0 20 20" fill="none">
						<path
							d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
							fill="#F64653"></path>
						<path
							d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
							fill="#F64653"></path>
						<path
							d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
							fill="#F64653"></path>
						<path
							d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
							fill="#F64653"></path>
					</svg></div>
			</div>
		</div>
		<div class="news-content__categories" data-aos="fade-up">
			<div class="news-content__categories-wrapper"><a
					class="news-content__categories-item active btn-hover_parent no-scale" href="#">
					<div class="btn-hover_circle white"></div><span>Все</span>
				</a><a class="news-content__categories-item btn-hover_parent no-scale" href="#">
					<div class="btn-hover_circle white"></div><span>Новости компании</span>
				</a><a class="news-content__categories-item btn-hover_parent no-scale" href="#">
					<div class="btn-hover_circle white"></div><span>Акции</span>
				</a><a class="news-content__categories-item btn-hover_parent no-scale" href="#">
					<div class="btn-hover_circle white"></div><span>Выставки и конференции</span>
				</a></div>
		</div>
		<div class="news-content__listing" data-aos="fade-up"><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">выставки и конференции</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">акции</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">новости компании</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">выставки и конференции</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">акции</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">новости компании</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">выставки и конференции</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">акции</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">новости компании</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">выставки и конференции</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">акции</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a><a class="news-card" href="#">
				<div class="news-card__top">
					<div class="news-card__plug">новости компании</div>
					<div class="news-card__bg">
						<picture class="picture">
							<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/main-news-card1.webp"><img
								class="picture__img" src="assets/images/main-news-card1.png">
						</picture>
					</div>
				</div>
				<div class="news-card__bot">
					<div class="news-card__date">6 марта 2023</div>
					<div class="news-card__title">Диетолог Снегирева рассказала, как выбрать правильное мороженое</div>
				</div>
			</a></div>
		<div class="news-content__more btn-hover_parent">
			<div class="btn-hover_circle"></div><span>Показать еще</span>
		</div>
	</section>
</section>
<div class="container">
	<section class="section-mailing news-content__mailing" data-aos="fade-up">
		<div class="section-mailing__bg desktop">
			<picture class="picture">
				<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg.webp"><img class="picture__img"
					src="assets/images/section-mailing-bg.png">
			</picture>
		</div>
		<div class="section-mailing__bg device-bg">
			<picture class="picture">
				<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-device.webp"><img
					class="picture__img" src="assets/images/section-mailing-bg-device.png">
			</picture>
		</div>
		<div class="section-mailing__bg mobile-bg">
			<picture class="picture">
				<source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-mobile.webp"><img
					class="picture__img" src="assets/images/section-mailing-bg-mobile.png">
			</picture>
		</div>
		<div class="section-mailing__content">
			<div class="section-mailing__title">подпишитесь на нас, чтобы быть в&nbsp;курсе</div>
			<form class="section-mailing__form" data-parsley-validate="">
				<div class="section-mailing__form-container">
					<div class="input-wrapper" data-input-parent="">
						<div class="input-wrapper__placeholder">E-mail</div><input class="input" data-input="" required
							type="email" placeholder="E-mail">
					</div>
				</div><button class="section-mailing__form-button btn-hover_parent" type="submit">
					<div class="btn-hover_circle"></div><span>Подписаться</span>
				</button>
			</form>
			<div class="section-mailing__policy">Нажимая на кнопку «Отправить», вы даете согласие с&nbsp;<a
					href="#">политикой в&nbsp;отношении обработки персональных данных</a></div>
		</div>
	</section>
</div>
<div class="popup popup-subscribe" data-popup-wrapper="subscribe-complete" data-overlay-on data-popup-fade>
	<div class="popup-subscribe__close" data-popup-close="subscribe-complete">
		<div class="btn-hover_parent">
			<div class="btn-hover_circle white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
				viewbox="0 0 24 24" fill="none">
				<path d="M6.69678 6.69671L17.3034 17.3033" stroke="#0068FF" stroke-width="2" stroke-linecap="round"
					stroke-linejoin="round"></path>
				<path d="M6.69662 17.3033L17.3032 6.69671" stroke="#0068FF" stroke-width="2" stroke-linecap="round"
					stroke-linejoin="round"></path>
			</svg>
		</div>
	</div>
	<div class="popup-subscribe__inner">
		<div class="popup-subscribe__send-logo"><svg width="100" height="99" viewbox="0 0 100 99" fill="none"
				xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M35.2969 11.3709C39.5183 -3.42101 60.4814 -3.42101 64.7028 11.3709C66.0509 16.0947 70.9041 18.8967 75.669 17.7023C90.5899 13.9622 101.071 32.1167 90.372 43.1685C86.9551 46.6979 86.9551 52.3018 90.372 55.8312C101.071 66.883 90.5899 85.0376 75.669 81.2975C70.9041 80.1031 66.0509 82.905 64.7028 87.6288C60.4814 102.421 39.5183 102.421 35.2969 87.6288C33.9488 82.905 29.0957 80.1031 24.3307 81.2975C9.40981 85.0376 -1.07173 66.883 9.62775 55.8312C13.0446 52.3018 13.0446 46.6979 9.62776 43.1685C-1.07173 32.1167 9.40981 13.9622 24.3307 17.7023C29.0957 18.8967 33.9488 16.0947 35.2969 11.3709ZM68.8767 39.1055C69.9705 37.7929 69.7932 35.8421 68.4806 34.7482C67.168 33.6544 65.2172 33.8317 64.1233 35.1443L49.8361 52.2889C48.3066 54.1244 47.3674 55.2399 46.5936 55.9386C46.2347 56.2626 46.0219 56.3918 45.9198 56.4411C45.8991 56.4512 45.8843 56.4572 45.875 56.4607C45.8657 56.4572 45.8509 56.4512 45.8302 56.4411C45.7281 56.3918 45.5153 56.2626 45.1564 55.9386C44.3827 55.2399 43.4434 54.1244 41.9139 52.2889L35.8767 45.0443C34.7828 43.7317 32.832 43.5544 31.5194 44.6482C30.2068 45.7421 30.0295 47.6929 31.1233 49.0055L37.2922 56.4082C38.6472 58.0345 39.8686 59.5006 41.0096 60.5308C42.251 61.6518 43.8146 62.6502 45.875 62.6502C47.9354 62.6502 49.499 61.6518 50.7404 60.5308C51.8814 59.5006 53.1028 58.0345 54.4577 56.4082L68.8767 39.1055Z"
					fill="#00FFE0"></path>
			</svg></div>
		<div class="popup-subscribe__text">Подписка успешно оформлена</div>
		<div class="popup-subscribe__button btn-hover_parent" data-popup-close="subscribe-complete">
			<div class="btn-hover_circle"></div><span>Закрыть</span>
		</div>
	</div>
</div>

 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("",""),
		"LIST_PROPERTY_CODE" => array("",""),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"VARIABLE_ALIASES" => Array("ELEMENT_ID"=>"ELEMENT_ID","SECTION_ID"=>"SECTION_ID")
	)
);?>

<br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>