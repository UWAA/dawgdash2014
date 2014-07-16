//_accordionPlusMinus.js

$(document).ready(function() {

	function toggleMinusPlus(e) {
		$(e.target)
			.siblings('.faq-heading')
			.find('.oi')
			.toggleClass('oi-plus oi-minus');
		console.log('clicked');
	}

	$('#accordion').on('hide.bs.collapse', toggleMinusPlus);
	$('#accordion').on('show.bs.collapse', toggleMinusPlus);


});
