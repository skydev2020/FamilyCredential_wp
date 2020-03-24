<?php
/* ------------------------ Sidebars ------------------------------------------------ */
/**********************************************************************************************/

if ( function_exists('register_sidebar') ) {
	

	register_sidebar( array (
		'name' => __('FX Elements Sidebar One'),
		'id' => 'migfx_elements_sidebar_one',
		'description' => __('FX Element widget.'),
		'before_widget' => '<div class="migfx_elements_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="migfx_elements_widget_title">',
		'after_title' => '</h4>',
	));
	
	register_sidebar( array (
		'name' => __('FX Elements Sidebar Two'),
		'id' => 'migfx_elements_sidebar_two',
		'description' => __('FX Element widget.'),
		'before_widget' => '<div class="migfx_elements_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="migfx_elements_widget_title">',
		'after_title' => '</h4>',
	));
	
	register_sidebar( array (
		'name' => __('FX Elements Sidebar Three'),
		'id' => 'migfx_elements_sidebar_three',
		'description' => __('FX Element widget.'),
		'before_widget' => '<div class="migfx_elements_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="migfx_elements_widget_title">',
		'after_title' => '</h4>',
	));
	
	register_sidebar( array (
		'name' => __('FX Elements Sidebar Four'),
		'id' => 'migfx_elements_sidebar_four',
		'description' => __('FX Element widget.'),
		'before_widget' => '<div class="migfx_elements_widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="migfx_elements_widget_title">',
		'after_title' => '</h4>',
	));
}
?>