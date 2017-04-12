<!DOCTYPE html>
<html>

		<!-- Head -->
		<? require('layout/head.php') ?>

<body>

		<!-- SVG icons include -->
		<? require('layout/svg.php') ?>

		<!-- Header -->
		<? require('layout/header.php') ?>

		<section class="main-container">
			<div class="header-container header-container_content-page">
				<div class="center">
					<div class="full-width fl fl-in-di">
						<div>
							<ul class="breadcrumbs breadcrumbs_banner">
								<li><a href="#">Главная</a></li>
								<li><span>/</span></li>
								<li><span>Контакты</span></li>
							</ul>
							<h3 class="header-container__header">Контакты</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="center">
				<div class="content-container contacts-cnt">
					<div class="full-width fl fl-in-di">
						<div class="left">
							<div class="contact-blck contact-blck_info">
								<div class="header-container header-container_bottom-line">
									<h3 class="header-container__header">Контактная информация</h3>
								</div>
								<div class="contact-blck__contact phone">
			            <a class="phone__phone-number fl fl-ai-c" href="#">8 (495) 255-09-08 </a>
			            <p class="phone__phone-note">бронировать бесплатно</p>
			          </div>
								<div class="contact-blck__contact phone">
			            <a class="phone__phone-number phone__phone-number_email fl fl-ai-c" href="#">order@bitcom.ru</a>
			            <p class="phone__phone-note">бронировать бесплатно</p>
			          </div>
								<div class="contact-blck__contact phone">
			            <a class="phone__phone-number fl fl-ai-c" href="#">8 (495) 255-09-08 </a>
			            <p class="phone__phone-note">бронировать бесплатно</p>
			          </div>
								<div class="contact-blck__contact phone">
			            <a class="phone__phone-number phone__phone-number_email fl fl-ai-c" href="#">support@bitcom.ru</a>
			            <p class="phone__phone-note">бронировать бесплатно</p>
			          </div>
							</div>
							<div class="contact-blck contact-blck_office">
								<div class="header-container header-container_bottom-line">
									<div class="full-width fl fl-in-di fl-ai-b">
										<h3 class="header-container__header">Офис</h3>
										<p class="metro">Комсомольская</p>
									</div>
								</div>
								<p>127055, г. Москва,  ул. Сущевская, д. 21, (БЦ "Молодая гвардия") <br>подъезд №2, этаж №3, офис 31.</p>
								<div class="contact-blck__map"></div>
							</div>
						</div>
						<div class="right">
							<div class="contact-blck contact-blck_law-info">
								<div class="header-container">
									<h3 class="header-container__header">Придическая информация</h3>
								</div>
								<p>Общество с ограниченной ответственностью «Аэлита трэвел» (ООО «Аэлита трэвел»)</p>
								<p>ИНН 7841029723, <br> КПП 781401001, <br> ОГРН 1157847351155</p>
							</div>
							<div class="contact-blck contact-blck_form">
								<div class="header-container">
									<h3 class="header-container__header">Напишите нам</h3>
								</div>
								<form class="fl fl-in-di">
									<input class="standart-input" type="text" placeholder="Ваше имя*" />
									<input class="standart-input" type="text" placeholder="Компания*" />
									<input class="standart-input" type="text" placeholder="Email*" />
									<input class="standart-input" type="text" placeholder="Телефон*" />
									<textarea class="standart-input" placeholder="Сообщение"></textarea>
									<button>Отправить</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<? require('layout/footer.php') ?>

</body>
