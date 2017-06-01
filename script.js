

var main = function() {

	var options = {
	  itemSelector: '.grid-item',
	  masonry: {
	    columnWidth: 150,
	    fitWidth: true	
	  }
	};

	$('.grid').isotope(options);
}

$(document).ready(main());
