<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

// echo '<pre>';
// print_r($arParams);
// echo '</pre>';


?>


<section class="news-detail">
	<div class="news-detail__top">
		<h2 class="news-detail__title"><?= $arResult['NAME']?></h2>
		<div class="title-rombs">
			<div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
					<path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
					<path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
					<path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
					<path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
				</svg></div>
			<div class="title-rombs__item"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
					<path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z" fill="#F64653"></path>
					<path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z" fill="#F64653"></path>
					<path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z" fill="#F64653"></path>
					<path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z" fill="#F64653"></path>
				</svg></div>
		</div>
	</div>
						<div class="news-detail__time">
							<div class="news-detail__date"><?=$arResult['DISPLAY_ACTIVE_FROM']?></div>
							<div class="news-detail__plug">
								<?php
								echo $arResult['SECTION']['PATH'][0]['NAME'];
								?>
							</div>
						</div>
						<div class="news-detail__content" data-aos="fade-up">

							<?php
							echo $arResult['PREVIEW_TEXT'];
							?>


							<div class="news-detail__img">
								<picture class="picture">
									<img class="picture__img" src="<?=$arResult['DETAIL_PICTURE']['SRC']  ?>">
								</picture>
							</div>

							<?php
							echo $arResult['DETAIL_TEXT'];
							?>

							<div class="news-detail__img">
								<picture class="picture">
								<img class="picture__img" src="<?=$arResult['DETAIL_PICTURE']['SRC']  ?>">
								</picture>
							</div>
							<h4>Подпись к фото</h4>
						</div>
					</section>
				</section>
				<div class="container">
					<section class="section-mailing" data-aos="fade-up">
						<div class="section-mailing__bg desktop">
							<picture class="picture">
								<img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg.png">
							</picture>
						</div>
						<div class="section-mailing__bg device-bg">
							<picture class="picture">
								<img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-device.png">
							</picture>
						</div>
						<div class="section-mailing__bg mobile-bg">
							<picture class="picture">
								<img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-mobile.png">
							</picture>
						</div>
						<div class="section-mailing__content">
							<div class="section-mailing__title">подпишитесь на нас, чтобы быть в&nbsp;курсе</div>
							<form class="section-mailing__form" data-parsley-validate="">
								<div class="section-mailing__form-container">
									<div class="input-wrapper" data-input-parent="">
										<div class="input-wrapper__placeholder">E-mail</div><input class="input" data-input="" required type="email" placeholder="E-mail">
									</div>
								</div><button class="section-mailing__form-button btn-hover_parent" type="submit">
									<div class="btn-hover_circle"></div><span>Подписаться</span>
								</button>
							</form>
							<div class="section-mailing__policy">Нажимая на кнопку «Отправить», вы даете согласие с&nbsp;<a href="#">политикой в&nbsp;отношении обработки персональных данных</a></div>
						</div>
					</section>
				</div>
				<div class="popup popup-subscribe" data-popup-wrapper="subscribe-complete" data-overlay-on data-popup-fade>
					<div class="popup-subscribe__close" data-popup-close="subscribe-complete">
						<div class="btn-hover_parent">
							<div class="btn-hover_circle white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
								<path d="M6.69678 6.69671L17.3034 17.3033" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M6.69662 17.3033L17.3032 6.69671" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</div>
					</div>
					<div class="popup-subscribe__inner">
						<div class="popup-subscribe__send-logo"><svg width="100" height="99" viewbox="0 0 100 99" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M35.2969 11.3709C39.5183 -3.42101 60.4814 -3.42101 64.7028 11.3709C66.0509 16.0947 70.9041 18.8967 75.669 17.7023C90.5899 13.9622 101.071 32.1167 90.372 43.1685C86.9551 46.6979 86.9551 52.3018 90.372 55.8312C101.071 66.883 90.5899 85.0376 75.669 81.2975C70.9041 80.1031 66.0509 82.905 64.7028 87.6288C60.4814 102.421 39.5183 102.421 35.2969 87.6288C33.9488 82.905 29.0957 80.1031 24.3307 81.2975C9.40981 85.0376 -1.07173 66.883 9.62775 55.8312C13.0446 52.3018 13.0446 46.6979 9.62776 43.1685C-1.07173 32.1167 9.40981 13.9622 24.3307 17.7023C29.0957 18.8967 33.9488 16.0947 35.2969 11.3709ZM68.8767 39.1055C69.9705 37.7929 69.7932 35.8421 68.4806 34.7482C67.168 33.6544 65.2172 33.8317 64.1233 35.1443L49.8361 52.2889C48.3066 54.1244 47.3674 55.2399 46.5936 55.9386C46.2347 56.2626 46.0219 56.3918 45.9198 56.4411C45.8991 56.4512 45.8843 56.4572 45.875 56.4607C45.8657 56.4572 45.8509 56.4512 45.8302 56.4411C45.7281 56.3918 45.5153 56.2626 45.1564 55.9386C44.3827 55.2399 43.4434 54.1244 41.9139 52.2889L35.8767 45.0443C34.7828 43.7317 32.832 43.5544 31.5194 44.6482C30.2068 45.7421 30.0295 47.6929 31.1233 49.0055L37.2922 56.4082C38.6472 58.0345 39.8686 59.5006 41.0096 60.5308C42.251 61.6518 43.8146 62.6502 45.875 62.6502C47.9354 62.6502 49.499 61.6518 50.7404 60.5308C51.8814 59.5006 53.1028 58.0345 54.4577 56.4082L68.8767 39.1055Z" fill="#00FFE0"></path>
							</svg></div>
						<div class="popup-subscribe__text">Подписка успешно оформлена</div>
						<div class="popup-subscribe__button btn-hover_parent" data-popup-close="subscribe-complete">
							<div class="btn-hover_circle"></div><span>Закрыть</span>
						</div>
					</div>
				</div>