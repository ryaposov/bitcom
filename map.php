<!DOCTYPE html>
<html>

	<!-- Head -->
	<? require('layout/head.php') ?>

<body>

	<!-- SVG icons include -->
	<? require('layout/svg.php') ?>

	<!-- Header -->
	<? require('layout/header.php') ?>

	<section class="map">
		<div class="map__itsef"></div>
		<input type="checkbox" id="map__filters-state" class="dn" checked="" />
		<div class="center">
			<div class="map__left map__left_place">
				<div class="map__search">
					<div class="map__search-input">
						<input type="text" name="search" placeholder="Введите название заведения"/>
						<label for="map__filters-state" class="map__filters-icon"></label>
					</div>
					<div class="map__results">
						<span class="map__results-header">Найдено <span>3</span> заведения</span>
						<div class="map__results-list">
							<div class="map__item place">
								<div class="place-attributes">
									<div class="map__item-top">
										<div>
											<a href="#" class="place-attributes__header map__item-header">Brisbane</a>
											<p class="place-attributes__subheader">Европейская кухня</p>
										</div>
										<div>
											<p class="place-attributes__rating"><span>4.3</span></p>
										</div>
									</div>
									<div class="map__item-bottom">
										<p class="place-attributes__middle-check"><span>1400 <i class="currency currency_rub currency_regular ">Р</i></span></p>
										<p class="metro">Комсомольская</p>
										<p class="status status_load-middle"><span>Свободно</span></p>
									</div>
								</div>
							</div>
							<div class="map__item place">
								<div class="place-attributes">
									<div class="map__item-top">
										<div>
											<a href="#" class="place-attributes__header map__item-header">Brisbane</a>
											<p class="place-attributes__subheader">Европейская кухня</p>
										</div>
										<div>
											<p class="place-attributes__rating"><span>4.3</span></p>
										</div>
									</div>
									<div class="map__item-bottom">
										<p class="place-attributes__middle-check"><span>1400 <i class="currency currency_rub currency_regular ">Р</i></span></p>
										<p class="metro">Комсомольская</p>
										<p class="status status_load-middle"><span>Свободно</span></p>
									</div>
								</div>
							</div>
							<div class="map__item place">
								<div class="map__item-image place__image-block">
									<img class="place__thumbnail" src="../images/restaurant-image-1.png">
									<a href="#" class="abs-link"></a>
								</div>
								<div class="place-attributes">
									<div class="map__item-top">
										<div>
											<a href="#" class="place-attributes__header map__item-header">Brisbane</a>
											<p class="place-attributes__subheader">Европейская кухня</p>
										</div>
										<div>
											<p class="place-attributes__rating"><span>4.3</span></p>
										</div>
									</div>
									<div class="map__item-bottom">
										<p class="place-attributes__middle-check"><span>1400 <i class="currency currency_rub currency_regular ">Р</i></span></p>
										<p class="metro">Комсомольская</p>
										<p class="status status_load-middle"><span>Свободно</span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="map__results-empty">
							<span>Заведения не найдены</span>
						</div>
					</div>
				</div>
				<div class="map__place map__item">
					<div class="map__item-image place__image-block">
						<img class="place__thumbnail" src="../images/restaurant-image-1.png">
						<span class="map__place-back"><i class="fa fa-angle-left" aria-hidden="true"></i> назад</span>
					</div>
					<div class="place-attributes">
						<div class="map__item-top">
							<div>
								<a href="#" class="place-attributes__header map__item-header">Brisbane</a>
								<p class="place-attributes__subheader">Европейская кухня</p>
							</div>
							<div>
								<p class="place-attributes__rating"><span>4.3</span></p>
							</div>
						</div>
						<div class="map__item-bottom">
							<p class="place-attributes__middle-check"><span>1400 <i class="currency currency_rub currency_regular ">Р</i></span></p>
							<p class="metro">Комсомольская</p>
							<p class="status status_load-middle"><span>Свободно</span></p>
						</div>
					</div>
					<a href="#" class="map__item-full">В карточку заведения</a>
					<div class="map__item-time time_wrapper full-width fl fl-in-di">
						<div class="time-point fl fl-jc-c fl-ai-c">
							<p class="time-point__time">19:00</p>
							<a href="#" class="abs-link"></a>
						</div>
						<div class="time-point fl fl-jc-c fl-ai-c">
							<p class="time-point__time">19:00</p>
							<a href="#" class="abs-link"></a>
						</div>
						<div class="time-point fl fl-jc-c fl-ai-c">
							<p class="time-point__time">19:00</p>
							<a href="#" class="abs-link"></a>
						</div>
						<div class="time-point fl fl-jc-c fl-ai-c">
							<p class="time-point__time">19:00</p>
							<a href="#" class="abs-link"></a>
						</div>
						<div class="time-point fl fl-jc-c fl-ai-c">
							<p class="time-point__time">19:00</p>
							<a href="#" class="abs-link"></a>
						</div>
						<div class="time-point fl fl-jc-c fl-ai-c">
							<p class="time-point__time">19:00</p>
							<a href="#" class="abs-link"></a>
						</div>
						<div class="time-point fl fl-jc-c fl-ai-c">
							<p class="time-point__time">19:00</p>
							<a href="#" class="abs-link"></a>
						</div>
						<div class="time-point fl fl-jc-c fl-ai-c">
							<p class="time-point__time">19:00</p>
							<a href="#" class="abs-link"></a>
						</div>
						<a href="#" class="map__item-time-more" for="time-extended">другое время</a>
					</div>
				</div>
			</div>
			<div class="map__filters">
				<div class="filters-wrap fl nwr">
					<div class="filters-wrap__filters fl fl-ai-fs fl-in-di">
						<div class="map__filters-list filters-wrap__filter-categories">
							<select class="map__filters-single single-filter-category">
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
							</select>
							<select class="map__filters-single single-filter-category">
								<option value="">Кухня</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
							</select>
							<select class="map__filters-single single-filter-category">
								<option value="">Кухня</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
							</select>
							<select class="map__filters-single single-filter-category">
								<option value="">Кухня</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
							</select>
							<select class="map__filters-single single-filter-category">
								<option value="">Кухня</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
								<option value="">Тип заведения</option>
							</select>
						</div>
						<div class="filters-wrap__filters-itself">
							<p class="single-filter single-filter_metro">Белорусская<a class="single-filter__remove" href="#"></a></p>
							<p class="single-filter">до 800 руб.<a class="single-filter__remove" href="#"></a></p>
							<p class="single-filter">открыто до 02:00<a class="single-filter__remove" href="#"></a></p>
							<p class="single-filter">парковка<a class="single-filter__remove" href="#"></a></p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
