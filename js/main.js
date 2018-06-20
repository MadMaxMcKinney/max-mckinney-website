$(document).ready(function() {

	// M-Overlay
	$(function(){
		$('.m-menu-btn').click(function() {
			$('.m-overlay').toggleClass('m-enabled');
		});
	});

	mediumZoom('.photo-grid img', {
		margin: 56
	})

});
