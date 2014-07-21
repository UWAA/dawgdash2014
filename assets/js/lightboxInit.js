//
//
//Lighbox Init function
//////////////////////////////


$(document).ready(function() {

	$('.lightbox-movie').magnificPopup({
		type:'iframe',
		disableOn:'430'
	});


	$('.magnificGallery').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true,

		}
	});

});