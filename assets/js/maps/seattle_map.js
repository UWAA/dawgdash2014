var map = L.mapbox.map('map', 'bperick.ilp0kaof', {
	tileLayer: {
		detectRetina:true
	}
	})
    .setView([47.6610, -122.3075], 14);


var course_ui = document.getElementById('course-ui');
   

map.featureLayer.on('ready', function(){

	var typesObj = {};
	var types = [];
	var features = map.featureLayer.getGeoJSON().features;

for (var i = 0; i < features.length; i++) {
    typesObj[features[i].properties.title] = true;
    //typesObj[features[i].geometry.type] = true;
  }
  for (var k in typesObj) {
    types.push(k);
  }

 var checkboxes = [];

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
    var item = course_ui.appendChild(document.createElement('div'));
    var checkbox = item.appendChild(document.createElement('input'));
    var label = item.appendChild(document.createElement('label'));
    checkbox.type = 'checkbox';
    checkbox.id = types[ii];
    checkbox.checked = true;
    item.className='active ui_menu_box';
    // create a label to the right of the checkbox with explanatory text
    label.innerHTML = types[ii];
    label.setAttribute('for', types[ii]);
    // Whenever a person clicks on this checkbox, call the update().
    //checkbox.addEventListener('change', update);
    checkboxes.push(checkbox);
  }

  // This function is called whenever someone clicks on a checkbox and changes
  // the selection of markers to be displayed.


//Make the entire button clickable, and bind active classes to the 

//var ui_menu_box = $('#course-ui');







function toggleAndCheck () {
  $(this).find('input').prop('checked', true);
  $(this).toggleClass('active');
  
}

function justToggle() {
  $(this).parent().toggleClass('active');
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

  $('#course-ui')
    .on('click', '.ui_menu_box', toggleAndCheck)
    .on('click', '.ui_menu_box label', justToggle)
    .on('mouseup', '.ui_menu_box', checkCheck);
});//end onReady for FeatureLayer
    //var $this = $(this);
 //$this.find('input').prop('checked');
  //$this.toggleClass('active');




