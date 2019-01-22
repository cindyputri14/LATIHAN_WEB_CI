(function ($) {
	$(function () {

		$('.sidenav').sidenav();
		$('.parallax').parallax();

	}); // end of document ready
})(jQuery); // end of jQuery name space

// Or with jQuery

$(document).ready(function () {
	$('.carousel').carousel({
		duration: 200,
	});
});
