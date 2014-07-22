
$(document).ready( function() {

	var reqAnimationFrame = (function () {
	return window[Hammer.prefixed(window, 'requestAnimationFrame')] || function (callback) {
	window.setTimeout(callback, 1000 / 60);
	};
	})();


	var el = document.querySelector(".gallery");
	var startX = Math.round((el.parentNode.offsetWidth - el.offsetWidth) / 2);
	var startY = Math.round((el.parentNode.offsetHeight - el.offsetHeight) / 2);

	var ticking = false;
	var transform;

	function resetElementStart() {
		el.className = '';
	}

	function resetElementEnd() {
		transform = {
			translate: { x: startX, y: startY },
			scale: 1,
			rotate: 0
		};
		el.className = 'animate gallery';
		requestElementUpdate();
	}

	function updateElementTransform() {
		var value = [
		'translate3d(' + transform.translate.x + 'px, ' + transform.translate.y + 'px, 0)',
		'scale(' + transform.scale + ', ' + transform.scale + ')',
		'rotate(' + transform.rotate + 'deg)'];
		el.style.webkitTransform = el.style.transform = value.join(" ");
		ticking = false;
	}

	function requestElementUpdate() {
		if(!ticking) {
			ticking = true;
			reqAnimationFrame(updateElementTransform);
		}
	}
	var hammertime = new Hammer(el);
	hammertime.on("pan", function(ev){
		transform.translate = {
	x: startX + ev.deltaX,
	y: startY + ev.deltaY
	};
	requestElementUpdate();
		console.log(ev);
	});
	//hammertime.on("panstart rotatestart pinchstart", resetElementStart);
	//hammertime.on("panend rotateend pinchend pancancel rotatecancel pinchcancel", resetElementEnd);


resetElementEnd();

});