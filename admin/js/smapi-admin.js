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
		console.log("ready");
		$('.updatefinancialvalues').on('click', function(e) {
			e.preventDefault();
			$('.updatefinancialvalues').attr("disabled", true);
			console.log("Klickade på knappen");
			$.post( "https://snurra.datadelenhc.com/api/v1/login", { email: "demo@smartprovider.se", password: "Password@" })
			.done(function( data ) {
				var json_string = JSON.stringify(data);
				var json_obj = jQuery.parseJSON(json_string);
				if (json_obj.success) {
					console.log(json_obj.success.month_12);						
				}
				$('.updatefinancialvalues').attr("disabled", false);
			});		
		});
	});

})( jQuery );
