

$(document).ready(function() {
	var $gallery = $('.gallery');
	var $holder = $('.holder');
	var $leftControl = $('.control-left');
	var $rightControl = $('.control-right');
	var $this = $(this);
	var $holderScrollPosition;
	//var distance;

	//Constants
	

	function getScrollDistance() {
	var pictureWidth = 149,
		holderWidth = $holder.width(),
		numberOfPictures = 12,
		visiblePictures = Math.round(holderWidth/pictureWidth),
		unseenPictures = numberOfPictures - visiblePictures;
		distance = $holder.width();
		return distance;
}
	
	
		
	
	

	$leftControl.click(function() {
		var $holderScrollPosition = $holder.scrollLeft();
		if ($holderScrollPosition === 0) {
			console.log ('scroll position is '+$holderScrollPosition+'');
			console.log('nowhere to scroll');
			return;
		} else {
		getScrollDistance();
		var distance = 0;
		console.log('left-clicked');
		$holder.animate({
			scrollLeft:distance
		}, 300);
	}

	});

	$rightControl.click(function() {
		getScrollDistance();
		console.log('right-clicked');
		$holder.animate({
			scrollLeft:distance
		}, 300);

	});


/*	$rightControl.click(function() {
		$gallery.toggleClass('move-right');
	});*/

});


