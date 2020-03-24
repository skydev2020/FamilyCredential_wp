jQuery(document).ready(function($) {

	// Code editor
	var gn_custom_editor = CodeMirror.fromTextArea(document.getElementById("migfx-elements-custom-css"), {});

	// Tables
	$('.migfx-elements-table-shortcodes tr:even, .migfx-elements-table-demos tr:even').addClass('even');

	// Tabs
	$('#migfx-elements-wrapper .migfx-elements-pane:first').show();
	$('#migfx-elements-tabs a').click(function() {
		$('.migfx-elements-message').hide();
		$('#migfx-elements-tabs a').removeClass('migfx-elements-current');
		$(this).addClass('migfx-elements-current');
		$('#migfx-elements-wrapper .migfx-elements-pane').hide();
		$('#migfx-elements-wrapper .migfx-elements-pane').eq($(this).index()).show();
		gn_custom_editor.refresh();
	});

	// Ajaxify settings form
	$('#migfx-elements-form-save-settings').ajaxForm({
		beforeSubmit: function() {
			$('#migfx-elements-form-save-settings .migfx-elements-spin').show();
			$('#migfx-elements-form-save-settings .migfx-elements-submit').attr('disabled', true);
		},
		success: function() {
			$('#migfx-elements-form-save-settings .migfx-elements-spin').hide();
			$('#migfx-elements-form-save-settings .migfx-elements-submit').attr('disabled', false);
		}
	});

	// Ajaxify custom CSS form
	$('#migfx-elements-form-save-custom-css').ajaxForm({
		beforeSubmit: function() {
			$('#migfx-elements-form-save-custom-css .migfx-elements-spin').show();
			$('#migfx-elements-form-save-custom-css .migfx-elements-submit').attr('disabled', true);
		},
		success: function() {
			$('#migfx-elements-form-save-custom-css .migfx-elements-spin').hide();
			$('#migfx-elements-form-save-custom-css .migfx-elements-submit').attr('disabled', false);
		}
	});

	// Auto-open tab by link with hash
	if ( strpos( document.location.hash, '#tab-' ) !== false )
		$('#migfx-elements-tabs a:eq(' + document.location.hash.replace('#tab-','') + ')').trigger('click');

});

// ########## Strpos tool ##########

function strpos( haystack, needle, offset) {
	var i = haystack.indexOf( needle, offset );
	return i >= 0 ? i : false;
}