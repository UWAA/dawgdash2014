/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {

    }
  },
  // Home page
  home: {
    init: function() {
      $('.rslides').responsiveSlides({
    auto: true,             // Boolean: Animate automatically, true or false
    speed: 700,            // Integer: Speed of the transition, in milliseconds
    timeout: 3000,          // Integer: Time between slide transitions, in milliseconds
    pager: false,           // Boolean: Show pager, true or false
    nav: false,             // Boolean: Show navigation, true or false
    random: false,          // Boolean: Randomize the order of the slides, true or false
    pause: true,           // Boolean: Pause on hover, true or false
    pauseControls: true,    // Boolean: Pause when hovering controls, true or false
    prevText: 'Previous',   // String: Text for the 'previous' button
    nextText: 'Next',       // String: Text for the 'next' button
    maxwidth: '475',           // Integer: Max-width of the slideshow, in pixels
    navContainer: '',       // Selector: Where controls should be appended to, default is after the 'ul'
    manualControls: '',     // Selector: Declare custom pager navigation
    namespace: 'rslides',   // String: Change the default namespace used
    before: function(){},   // Function: Before callback
    after: function(){}     // Function: After callback
  });

$('.link-button .disabled').click(function(event) {
    event.preventDefault();
  });
  }
  //end init for slider

  
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  },
seattle: {
    init: function() {
      

var SW = L.latLng(47.5430704492123, -122.434308624268);
var NE = L.latLng(47.7774957780179, -122.174227142334);
var bounds = L.latLngBounds(SW, NE);

var clientWidth = $(window).width();
//Always get the current window width
  $(window).resize(function() {
    clientWidth = $(window).width();
    map.closePopup();
  });

  //Set up the initial map 
  var startingClientWidth = $(window).width();

  if (startingClientWidth < 480) {
    setCenter = [47.6580, -122.3030];
    zoomCenter = 14;
  } else {
    setCenter = [47.6575, -122.3095];
    zoomCenter = 15;
  }

L.mapbox.accessToken = 'pk.eyJ1IjoiYnBlcmljayIsImEiOiJrT2xBSUNzIn0.n-CVAwFlqHGqkiDUxsIdSQ';
var map = L.mapbox.map('map', 'bperick.io0079f9', {
  tileLayer: {
    detectRetina:true,
  },
  maxBounds:bounds,
  minZoom:13,
  scrollWheelZoom:false,
  doubleClickZoom:false,
  tap:false,
  center: setCenter,
  zoom: zoomCenter

  });


  
    
    //https://github.com/Leaflet/Leaflet/issues/859
  L.Map.prototype.panToOffset = function (latlng, offset, options) {
    var x = this.latLngToContainerPoint(latlng).x - offset[0];
    var y = this.latLngToContainerPoint(latlng).y - offset[1];
    var point = this.containerPointToLatLng([x, y]);
    return this.setView(point, this._zoom, { pan: options });
};

    //Pan to the feature layer minus a little bit so the tooltip stays in frame.
    map.featureLayer.on('click', function(e) {
      if (clientWidth > 480) {
        var yOffset = $('#map').height() / 3;
        map.panToOffset(e.layer.getLatLng(), ['0', yOffset]);
     } else {
      return;
     }
    });





var course_ui = document.getElementById('course-ui');
   

// //Disable Scroll Wheel Zoom
// map.scrollWheelZoom.disable();



map.featureLayer.on('ready', function(){

  var typesObj = {};
  var types = [];
  var features = map.featureLayer.getGeoJSON().features;
  var checkboxes = [];

  for (var i = 0; i < features.length; i++) {
      typesObj[features[i].properties.title] = true;
      // typesObj[features[i].geometry.type] = true;
    }
    for (var k in typesObj) {
      types.push(k);
    }

 

 function update() {
    var enabled = {};
    // Run through each checkbox and record whether it is checked. If it is,
    // add it to the object of types to display, otherwise do not.
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        enabled[checkboxes[i].id] = true;
      }
    }
    map.featureLayer.setFilter(function(feature) {
      // If this symbol is in the list, return true. if not, return false.
      // The 'in' operator in javascript does exactly that: given a string
      // or number, it says if that is in a object.
      // 2 in { 2: true } // true
      // 2 in { } // false
     return (feature.properties.title in enabled);
     //return (feature.properties.title in enabled);
    });
    
  }

  // Create a filter interface.
  for (var ii = 0; ii < types.length; ii++) {
    // Create an an input checkbox and label inside.
    if (types[ii] === '10K Course' || types[ii] === '5K Course' ) {
      var item = course_ui.appendChild(document.createElement('div'));
      var checkbox = item.appendChild(document.createElement('input'));
      var label = item.appendChild(document.createElement('label'));
      checkbox.type = 'checkbox';
      checkbox.id = types[ii];
      checkbox.checked = true;
      item.className='active ui_menu_box toggle_box';
      // create a label to the right of the checkbox with explanatory text
      label.textContent = types[ii];
      label.setAttribute('for', types[ii]);
      // Whenever a person clicks on this checkbox, call the update().
      //checkbox.addEventListener('change', update);
      checkboxes.push(checkbox);
    } else {
      var nonUIElement = {};
      nonUIElement.id = types[ii];
      nonUIElement.checked = true;
      checkboxes.push(nonUIElement);
    }
      
    }


    //Add the legend to the interface
    var Legend = [
      [ 'Campus Landmarks', 'landmarks'],
      ['Start', 'start'],
      ['Finish', 'finish']
    ];

    Legend.forEach(function(element, index, array) {
      var Legenditem = course_ui.appendChild(document.createElement('div'));
      var LegendText = Legenditem.appendChild(document.createElement('p'));
      Legenditem.className='ui_menu_box legend '+Legend[index][1]+'';
      LegendText.textContent = Legend[index][0];

    });
 

  // This function is called whenever someone clicks on a checkbox and changes
  // the selection of markers to be displayed.


//Make the entire button clickable, and bind active classes to the 

//var ui_menu_box = $('#course-ui');

function toggleAndCheck () {
  
  $(this).toggleClass('active');
  
}

function justToggle() {

  $(this).parent('div').toggleClass('active');
  return false;
 
}

function checkCheck () {
   var $this = $(this);
   var isChecked = $(this).find('input').prop('checked');
   if (isChecked === true) {
      setTimeout(function () {
                $this.find('input').prop('checked', false).blur();
                update();
            },
            10);
   } else if (isChecked === false) {
      setTimeout(function () {
                $this.find('input').prop('checked', true).blur();
                update();
            },
            10);
   }

}


function bindUI() {
$('#course-ui')
    .on('tap', '.toggle_box', toggleAndCheck)
    .on('tap', 'label', justToggle)
    .on('touchend mouseup', '.toggle_box', checkCheck);
}


function unBindUI() {
 $('#course-ui')
    .off('tap', '.toggle_box')
    .off('tap', 'label')
    .off('touchend mouseup', '.toggle_box');
}

map.on('move', unBindUI);
map.on('moveend', bindUI);
bindUI();
});//end onReady for FeatureLayer





    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
