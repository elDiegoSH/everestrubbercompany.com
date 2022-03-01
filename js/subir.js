document.addEvent('domready', function() {
	new Skyline_ScrollToTop({
		'image':		'../images/back_to_top_btn.png',
		'text':			'',
		'title':		'',
		'className':	'scrollToTop',
		'duration':		500,
		'transition':	Fx.Transitions.linear
	});
});
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});