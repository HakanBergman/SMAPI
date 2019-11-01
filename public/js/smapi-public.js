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

		/* Do this when user enters an amount on the financial front page */
		$('#smapi_amount').keydown(function() {
			var money = $(this).val();
			var month_12 = Math.round((money*($('#smapi_interest_month_12').val()/100))/12);
			var month_24 = Math.round((money*($('#smapi_interest_month_24').val()/100))/24);
			var month_36 = Math.round((money*($('#smapi_interest_month_36').val()/100))/36);
			var month_48 = Math.round((money*($('#smapi_interest_month_48').val()/100))/48);
			var month_60 = Math.round((money*($('#smapi_interest_month_60').val()/100))/60);
			$('#smapi_month_12').val(month_12);
			$('#smapi_month_24').val(month_24);
			$('#smapi_month_36').val(month_36);
			$('#smapi_month_48').val(month_48);
			$('#smapi_month_60').val(month_60);
		});

	});

})( jQuery );
