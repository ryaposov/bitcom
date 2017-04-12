var AppFunc = {
	fixedBody: function () {
		var b = $('body');
		if ($('#revies-popup-launcher, #event-1').is(':checked')) {
			b.removeClass('fixed');
		} else {
			b.addClass('fixed');
		}
	}
};
