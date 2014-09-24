//
//
//Lighbox Init function
//////////////////////////////


$(document).ready(function() {

	$('.videoWrapper').magnificPopup({
		type:'iframe',
		disableOn:'430',
	});


	$('.magnificGallery').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true,

		}
	});

});