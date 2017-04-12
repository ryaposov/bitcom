// Moment setLocale
moment.locale('ru');

// Config
var datepickerConfig = {
	showDaysInNextAndPreviousMonths: true,
	format: 'dddd, D MMM YYYY',
	firstDay: 1,
	onSelect: function() {
		var date = moment(this._d);
		var parent = $(this._o.field).closest('.date-and-people-block__date');
		parent.find('.date-and-people-block__day-description').text(moment(this._d).format('MMMM') + ', ' + moment(this._d).format('dddd'));
		parent.find('.date-and-people-block__day-number').text(moment(this._d).format('D'));
	},
	i18n: {
    previousMonth : 'Предыдущий месяц',
    nextMonth     : 'Следующий месяц',
    months        : ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    weekdays      : ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
    weekdaysShort : ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']
	}
};

$(function(){

	// Lightbox
  $('a.lightbox').featherlightGallery({
    previousIcon: '«',
    nextIcon: '»',
    galleryFadeIn: 300,
  });

	// Datepicker init
  $('.datepicker').pikaday(datepickerConfig).data('pikaday');

	// Quantity change
	$(document).on('click', '.date-and-people-block__change-quantity', function(event){
			var t = $(this);
			var v = t.parent().children('.date-and-people-block__current-quantity');
			var val = parseInt(t.parent().children('.date-and-people-block__current-quantity').text());

			if ( t.hasClass('plus') ) {
				console.log('plus');
				val = (val + 1 > 20) ? 20 : val + 1;
			} else if (t.hasClass('minus')) {
				val = (val - 1 == 0) ? 1 : val - 1;
			}

			v.text(val);

			return false;
	});

	// Show place card on map
	$(document).on('click', '.map__item-header', function(){
		$('.map__left').addClass('map__left_place');

		return false;
	});

	// Hide place card on map
	$(document).on('click', '.map__place-back', function(){
		$('.map__left').removeClass('map__left_place');

		return false;
	});

	// Set position for a map in list
	$(document).scroll(function(){
		var scrollTop = $(document).scrollTop();
		var map = $('.on-map-places-block__map');
		var left = $('.on-map-places-block');
		var headerAndSearch = 74 + 220;
		var mapMaxTop = left.height() - map.height();
		var isEnd = (scrollTop - left.offset().top >= mapMaxTop);

		if (map.length && scrollTop >= left.offset().top && !isEnd) {
			if(!map.hasClass('active')) map.removeClass('relative').removeAttr('style').addClass('active');
		} else if (map.length && isEnd) {
			map.addClass('relative').removeClass('active').css('top', mapMaxTop);
		} else {
			map.removeClass('active relative').removeAttr('style');
		}
	});

	// Select init
	$('select').select2({
		theme: 'single-filter-category',
		minimumResultsForSearch: 15
	});

})
