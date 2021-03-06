/*! Tappy! - a lightweight normalized tap event. Copyright 2013 @scottjehl, Filament Group, Inc. Licensed MIT */
(function( w, $, undefined ){

// handling flag is true when an event sequence is in progress (thx androood)
w.tapHandling = false;

var tap = function( $els ){
return $els.each(function(){

var $el = $( this ),
resetTimer,
startY,
startX,
cancel,
scrollTolerance = 10;

function trigger( e ){
$( e.target ).trigger( "tap", [ e, $( e.target ).attr( "href" ) ] );
e.stopImmediatePropagation();
}

function getCoords( e ){
var ev = e.originalEvent || e,
touches = ev.touches || ev.targetTouches;

if( touches ){
return [ touches[ 0 ].pageX, touches[ 0 ].pageY ];
}
else {
return null;
}
}

function start( e ){
if( e.touches && e.touches.length > 1 || e.targetTouches && e.targetTouches.length > 1 ){
return false;
}

var coords = getCoords( e );
startX = coords[ 0 ];
startY = coords[ 1 ];
}

// any touchscroll that results in > tolerance should cancel the tap
function move( e ){
if( !cancel ){
var coords = getCoords( e );
if( coords && ( Math.abs( startY - coords[ 1 ] ) > scrollTolerance || Math.abs( startX - coords[ 0 ] ) > scrollTolerance ) ){
cancel = true;
}
}
}

function end( e ){
clearTimeout( resetTimer );
resetTimer = setTimeout( function(){
w.tapHandling = false;
cancel = false;
}, 1000 );

if( e.ctrlKey || e.metaKey ){
return;
}

e.preventDefault();

// this part prevents a double callback from touch and mouse on the same tap

// if a scroll happened between touchstart and touchend
if( cancel || w.tapHandling && w.tapHandling !== e.type ){
cancel = false;
return;
}

w.tapHandling = e.type;
trigger( e );
}

$el
.bind( "touchstart MSPointerDown pointerdown", start )
.bind( "touchmove MSPointerMove pointerup", move )
.bind( "touchend MSPointerUp pointerup", end )
.bind( "click", end );
});
};

// use special events api
if( $.event && $.event.special ){
$.event.special.tap = {
add: function( handleObj ) {
tap( $( this ), true );
},
remove: function( handleObj ) {
tap( $( this ), false );
}
};
}
else{
// monkeybind
var oldBind = $.fn.bind;
$.fn.bind = function( evt ){
if( /(^| )tap( |$)/.test( evt ) ){
tap( this );
}
return oldBind.apply( this, arguments );
};
}

}( this, jQuery ));