
$('document').ready( function() {

var $gallery = $('.gallery');

var hammertime = new Hammer($gallery);
hammertime.on('pan', function(ev) {
    console.log(ev);
    console.log('hammertime');
});

});