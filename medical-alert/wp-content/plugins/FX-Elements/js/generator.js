jQuery(document).ready(function($) {

	// Apply chosen
	$('#migfx-elements-generator-select').chosen({
		no_results_text: $('#migfx-elements-generator-select').attr('data-no-results-text'),
		allow_single_deselect: true
	});

	// Select shortcode
	$('#migfx-elements-generator-select').live( "change", function() {
		var queried_shortcode = $('#migfx-elements-generator-select').find(':selected').val();
		$('#migfx-elements-generator-settings').addClass('migfx-elements-loading-animation');
		$('#migfx-elements-generator-settings').load($('#migfx-elements-generator-url').val() + '/lib/generator.php?shortcode=' + queried_shortcode, function() {
			$('#migfx-elements-generator-settings').removeClass('migfx-elements-loading-animation');

			// Init color pickers
			$('.migfx-elements-generator-select-color').each(function(index) {
				$(this).find('.migfx-elements-generator-select-color-wheel').filter(':first').farbtastic('.migfx-elements-generator-select-color-value:eq(' + index + ')');
				$(this).find('.migfx-elements-generator-select-color-value').focus(function() {
					$('.migfx-elements-generator-select-color-wheel:eq(' + index + ')').show();
				});
				$(this).find('.migfx-elements-generator-select-color-value').blur(function() {
					$('.migfx-elements-generator-select-color-wheel:eq(' + index + ')').hide();
				});
			});
		});
	});

	// Insert shortcode
	$('#migfx-elements-generator-insert').live('click', function(event) {
		var queried_shortcode = $('#migfx-elements-generator-select').find(':selected').val();
		var migfx_elements_compatibility_mode_prefix = $('#migfx-elements-compatibility-mode-prefix').val();
		$('#migfx-elements-generator-result').val('[' + migfx_elements_compatibility_mode_prefix + queried_shortcode);
		$('#migfx-elements-generator-settings .migfx-elements-generator-attr').each(function() {
			if ( $(this).val() !== '' ) {
				$("#migfx-elements-generator-result").val( $("#migfx-elements-generator-result").val() + " " + $(this).attr('name') + "='" + $(this).val() + "'" );
			}
		});
		$('#migfx-elements-generator-result').val($('#migfx-elements-generator-result').val() + ']');

		// wrap shortcode
		if ( $('#migfx-elements-generator-content').val() != 'false' ) {
			$('#migfx-elements-generator-result').val($('#migfx-elements-generator-result').val() + $('#migfx-elements-generator-content').val() + '[/' + migfx_elements_compatibility_mode_prefix + queried_shortcode + ']');
		}

		var shortcode = jQuery('#migfx-elements-generator-result').val();

		// Insert into widget
		if ( typeof window.migfx_elements_generator_target !== 'undefined' ) {
			jQuery('textarea#' + window.migfx_elements_generator_target).val( jQuery('textarea#' + window.migfx_elements_generator_target).val() + shortcode);
			tb_remove();
		}

		// Insert into editor
		else {
			window.send_to_editor(shortcode);
		}

		// Prevent default action
		event.preventDefault();
		return false;
	});

	// Widget insertion button click
	jQuery('a[data-page="widget"]').live('click',function(event) {
		window.migfx_elements_generator_target = jQuery(this).attr('data-target');
	});

});