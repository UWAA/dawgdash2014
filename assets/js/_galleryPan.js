

$(document).ready(function() {
	var $gallery = $('.gallery');
	var $holder = $('.holder');
	var $leftControl = $('.control-left');
	var $rightControl = $('.control-right');
	var $this = $(this);
	var $holderScrollPosition;
	var holderWidth;
	var distance;
	

	//Constants
	

	var scrollGallery = (function() {
		
		var distance;
		function scrollDistance() {
			var holderWidth = $holder.width();
			var $holderScrollPosition = $holder.scrollLeft();
			if ($holderScrollPosition < holderWidth) {
				distance = holderWidth;
			} else {
				distance = ($holderScrollPosition + holderWidth);
			}
		}
			
			return {
				left: function() {
				var holderWidth = $holder.width();
				var $holderScrollPosition = $holder.scrollLeft();
				distance = ($holderScrollPosition - holderWidth);
				$holder.animate({scrollLeft:distance}, 300);
				return;
			},
			right: function() {
				scrollDistance();
				$holder.animate({scrollLeft:distance}, 300);
				return;
			}
			};
		
	})();
		
	
		
	
	

	$leftControl.click(function() {
		console.log('left-clicked');
		scrollGallery.left();
	});

	$rightControl.click(function() {
		console.log('right-clicked');
		scrollGallery.right();
		

	});


/*	$rightControl.click(function() {
		$gallery.toggleClass('move-right');
	});*/

});

