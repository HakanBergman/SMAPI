(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	/* Do this when user clicks Update Financial Values */
	$( document ).ready(function() {
		/* Verify that the update button is clicked */
		$('.updatefinancialvalues').on('click', function(e) {
			/* Prevent default behaviour */
			e.preventDefault();
			/* Disable the button from further clicks */
			$('.updatefinancialvalues').attr("disabled", true);
			/* Fetch credentials */
			var smapi_username = $('#username').val();
			var smapi_password = $('#password').val();
			/* Make the post to the cloud service */
			$.post( "https://snurra.datadelenhc.com/api/v1/login", { email: smapi_username, password: smapi_password })
			.done(function( data ) {
				var json_string = JSON.stringify(data);
				var json_obj = jQuery.parseJSON(json_string);
				if (json_obj.success) {
					console.log(json_obj.success.month_12);						
				} else {
					console.log("Not verified");
				}
				$('.updatefinancialvalues').attr("disabled", false);
			});		
		});
	});

})( jQuery );
