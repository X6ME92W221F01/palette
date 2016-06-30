jQuery(document).ready(function($) {
	'use strict';

	$('.palette ul a').on('click', function(e) {
		e.preventDefault();

		var el = $(this);
		$(el.data('selector')).attr('href', el.attr('href'));
	});

	$('.palette-toggle').on('click', function(e) {
		e.preventDefault();
		$(this).closest('.palette-wrapper').toggleClass('open');
	});
});