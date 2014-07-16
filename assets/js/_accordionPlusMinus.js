//_accordionPlusMinus.js

$(document).ready(function() {

	function toggleMinusPlus(e) {
		$(e.target)
			.prev('.faq-heading')
			.find('.oi')
			.toggleClass('oi-plus oi-minus');
	}

	$('#accordion').on('hide.bs.collapse', toggleMinusPlus);
	$('#accordion').on('show.bs.collapse', toggleMinusPlus);


});
