<?php

	// Start WordPress
	require( '../../../../wp-load.php' );

	// Capability check
	if ( !current_user_can( 'author' ) && !current_user_can( 'editor' ) && !current_user_can( 'administrator' ) )
		die( 'Access denied' );

	// Param check
	if ( empty( $_GET['shortcode'] ) )
		die( 'Shortcode not specified' );

	$shortcode = migfx_elements_shortcodes( $_GET['shortcode'] );

	// Shortcode has atts
	if ( count( $shortcode['atts'] ) && $shortcode['atts'] ) {
		foreach ( $shortcode['atts'] as $attr_name => $attr_info ) {
			$return .= '<p>';
			$return .= '<label for="migfx-elements-generator-attr-' . $attr_name . '">' . $attr_info['desc'] . '</label>';

			// Select
			if ( count( $attr_info['values'] ) && $attr_info['values'] ) {
				$return .= '<select name="' . $attr_name . '" id="migfx-elements-generator-attr-' . $attr_name . '" class="migfx-elements-generator-attr">';
				foreach ( $attr_info['values'] as $attr_value ) {
					$attr_value_selected = ( $attr_info['default'] == $attr_value ) ? ' selected="selected"' : '';
					$return .= '<option' . $attr_value_selected . '>' . $attr_value . '</option>';
				}
				$return .= '</select>';
			}

			// Text & color input
			else {

				// Color picker
				if ( $attr_info['type'] == 'color' ) {
					$return .= '<span class="migfx-elements-generator-select-color"><span class="migfx-elements-generator-select-color-wheel"></span><input type="text" name="' . $attr_name . '" value="' . $attr_info['default'] . '" id="migfx-elements-generator-attr-' . $attr_name . '" class="migfx-elements-generator-attr migfx-elements-generator-select-color-value" /></span>';
				}

				// Text input
				else {
					$return .= '<input type="text" name="' . $attr_name . '" value="' . $attr_info['default'] . '" id="migfx-elements-generator-attr-' . $attr_name . '" class="migfx-elements-generator-attr" />';
				}
			}
			$return .= '</p>';
		}
	}

	// Single shortcode (not closed)
	if ( $shortcode['type'] == 'single' ) {
		$return .= '<input type="hidden" name="migfx-elements-generator-content" id="migfx-elements-generator-content" value="false" />';
	}

	// Wrapping shortcode
	else {
		$return .= '<p><label>' . __( 'Content', 'shortcodes-ultimate' ) . '</label><input type="text" name="migfx-elements-generator-content" id="migfx-elements-generator-content" value="' . $shortcode['content'] . '" /></p>';
	}

	$return .= '<p><a href="#" class="button-primary" id="migfx-elements-generator-insert">' . __( 'Insert', 'shortcodes-ultimate' ) . '</a> ';
	

	$return .= '<input type="hidden" name="migfx-elements-generator-result" id="migfx-elements-generator-result" value="" />';

	echo $return;
?>