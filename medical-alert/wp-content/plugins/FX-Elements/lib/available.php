<?php

	
	/**
	 * Open group of Shortcodes
	 */
	function migfx_elements_shortcodes( $shortcode = false ) {
		$icons = array(
							'Bills-Stack_dark', 'Bills-Stack_light', 'Box-Incoming_dark', 'Box-Incoming_light', 'Box-Outgoing_dark', 'Box-Outgoing_light', 'Box-Outgoing-2_dark', 'Box-Outgoing-2_light', 'Camera_dark', 'Camera_light', 'CD_dark', 'CD_light', 'Chart-2_dark', 'Chart-2_light', 'Chart-8_dark', 'Chart-8_light', 'Cinema-Display_dark', 'Cinema-Display_light', 'Cog-2_dark', 'Cog-2_light', 'DVD_dark', 'DVD_light', 'Film-2_dark', 'Film-2_light', 'G-Key_dark', 'G-Key_light', 'Go-Back-From-Screen_dark', 'Go-Back-From-Screen_light', 'Google-Maps_dark', 'Google-Maps_light', 'Graph_dark', 'Graph_light', 'HD-3_dark', 'HD-3_light', 'Headphones_dark', 'Headphones_light', 'Image-2_dark', 'Image-2_light', 'Images-2_dark', 'Images-2_light', 'iPad_dark', 'iPad_light', 'iPhone-4_dark', 'iPhone-4_light', 'Marker_dark', 'Marker_light', 'Mastercard_dark', 'Mastercard_light', 'Megaphone_dark', 'Megaphone_light', 'Microphone_dark', 'Microphone_light', 'Mouse-Wires_dark', 'Mouse-Wires_light', 'Phone_dark', 'Phone_light', 'Phone-3_dark', 'Phone-3_light', 'Phone-Hook_dark', 'Phone-Hook_light', 'Price-Tags_dark', 'Price-Tags_light', 'Quicktime_dark', 'Quicktime_light', 'Record_dark', 'Record_light', 'Recycle-Symbol_dark', 'Recycle-Symbol_light', 'Refresh-3_dark', 'Refresh-3_light', 'Refresh-4_dark', 'Refresh-4_light', 'Repeat_dark', 'Repeat_light', 'Shopping-Basket_dark', 'Shopping-Basket_light', 'Shopping-Cart-2_dark', 'Shopping-Cart-2_light', 'Shuffle_dark', 'Shuffle_light', 'Sound_dark', 'Sound_light', 'Speech-Bubble_dark', 'Speech-Bubble_light', 'Speech-Bubbles-2_dark', 'Speech-Bubbles-2_light', 'Tools_dark', 'Tools_light', 'Wifi_dark', 'Wifi_light',
						);

		$shortcodes = array(
			# basic shortcodes - start
			'basic-shortcodes-open' => array(
				'name' => __( 'Basic shortcodes', 'mig-fx' ),
				'type' => 'opengroup'
			),
			
			
			
			/*===================
			ICON BOX
			=====================
			*/
			'fx_iconbox' => array(
				'name' => 'Icon Box',
				'type' => 'wrap',
				'atts' => array(
			
					'title' => array(
						'values' => array(),
						'desc' => __( 'Title of the Box', 'mig-fx' )
					),
					'subtitle' => array(
						'values' => array(),
						'desc' => __( 'Subtitle of the Box', 'mig-fx' )
					),
					
					'useicon' => array(
						'values' => array(
							'yes',
							'no',
						),
						'desc' => __( 'Use icon?', 'mig-fx' )
					),
					
					'icon' => array(
						'values' => $icons,
						'desc' => __( 'Icon of the Box', 'mig-fx' )
					),
					
					'customicon' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid image URL to use as icon instead the above option', 'mig-fx' )
					),
					
					
					'url' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid URL for the button of the Box', 'mig-fx' )
					),
					
					
					'background' => array(
						'values' => array( ),
						'desc' => __( 'Set the background color of the box', 'mig-fx' ),
						'default' => '#ffffff',
						'type' => 'color'
					),
					
					'backgroundhover' => array(
						'values' => array( ),
						'desc' => __( 'Set the over background color of the box', 'mig-fx' ),
						'default' => '#eaeaea',
						'type' => 'color'
					),
					
					
					'buttoncolor' => array(
						'values' => array( ),
						'desc' => __( 'Set the background color of the button', 'mig-fx' ),
						'default' => '#8d0096',
						'type' => 'color'
					),
					
					'buttoncolorhover' => array(
						'values' => array( ),
						'desc' => __( 'Set the over background color of the button ', 'mig-fx' ),
						'default' => '#410045',
						'type' => 'color'
					),
					
					'text' => array(
						'values' => array(),
						'desc' => __( 'Text of the button', 'mig-fx' )
					),
					
					'linkwindow' => array(
						'values' => array(
						'self',
						'new',
						),
						'desc' => __( 'Open link in the same window or a new window', 'mig-fx' )
					),
					
					'size' => array(
						'values' => array(
							'one-half',
							'one-third',
							'one-fourth',
							'full',
						),
						'desc' => __( 'Select the size of the Box', 'mig-fx' )
					),
					
					'last' => array(
						'values' => array(
							'no',
							'yes',
						),
						'desc' => __( 'Is this the last box of the row?', 'mig-fx' )
					),
				),
				
				'content' => __( 'Content', 'mig-fx' ),
				'desc' => __( 'Box with Icon', 'mig-fx' )
			),
			
			/*===================
			SIMPLE BOX
			=====================
			*/
			'fx_simplebox' => array(
				'name' => 'Simple Box',
				'type' => 'wrap',
				'atts' => array(

					'textcolor' => array(
						'values' => array( ),
						'desc' => __( 'Set the text color', 'mig-fx' ),
						'default' => '#ffffff',
						'type' => 'color'
					),
					
					'background' => array(
						'values' => array( ),
						'desc' => __( 'Set the background color of the box ', 'mig-fx' ),
						'default' => '#ed21fa',
						'type' => 'color'
					),
					
					'backgroundhover' => array(
						'values' => array( ),
						'desc' => __( 'Set the over background color of the box', 'mig-fx' ),
						'default' => '#6715c4',
						'type' => 'color'
					),
					
					
					'size' => array(
						'values' => array(
							'one-half',
							'one-third',
							'one-fourth',
							'full',
						),
						'desc' => __( 'Select the size of the Box', 'mig-fx' )
					),
					
					'last' => array(
						'values' => array(
							'no',
							'yes',
						),
						'desc' => __( 'Is this the last box of the row?', 'mig-fx' )
					),
				),
				
				'content' => __( 'Content', 'mig-fx' ),
				'desc' => __( 'Simple Box', 'mig-fx' )
			),
			
			
			/*===================
			TOP MESSAGE
			=====================
			*/
			'fx_topmessage' => array(
				'name' => 'Top Message',
				'type' => 'wrap',
				'atts' => array(
			
					'title' => array(
						'values' => array(),
						'desc' => __( 'Title of the Box', 'mig-fx' )
					),
					
					
					'background' => array(
						'values' => array( ),
						'desc' => __( 'Set the background color', 'mig-fx' ),
						'default' => '#410045',
						'type' => 'color'
					),
				),
				
				'content' => __( 'Content', 'mig-fx' ),
				'desc' => __( 'Message at top of the screen', 'mig-fx' )
			),
			
			/*===================
			SCROOL TO TOP
			=====================
			*/
			'fx_scroll_to_top' => array(
				'name' => 'Scroll to Top',
				'type' => 'single',
				'atts' => array(
			
					'horizontal' => array(
						'values' => array(
							'right',
							'left',
						),
						'desc' => __( 'Select the horizontal position', 'mig-fx' )
					),
					
					
					'vertical' => array(
						'values' => array( 
							'bottom',
							'top',
						),
						'desc' => __( 'Select the vertical position', 'mig-fx' ),

					),
					
					'text' => array(
						'values' => array( ),
						'desc' => __( 'Text of the Button', 'mig-fx' ),
					),
					
					'background' => array(
						'values' => array( ),
						'desc' => __( 'Pick a color for the background', 'mig-fx' ),
						'default' => '#000000',
						'type' => 'color'
					),
					
					
				),
				'desc' => __( 'Scroll to Top Button', 'mig-fx' )	

			),

			/*===================
			BUTTON
			=====================
			*/
			'fx_button' => array(
				'name' => 'Scroll to Top',
				'type' => 'single',
				'atts' => array(
					'size' => array(
						'values' => array( 
						'big',
						'normal',
						'small',
						),
						'desc' => __( 'Choose button size', 'mig-fx' ),
						'default' => 'normal',
					),
					'border' => array(
						'values' => array( 
							'0',
							'1',
							'2',
							'3',
							'4',
							'5',
							'6',
							'7',
							'8',
							'9',
							'10',
						),
						'desc' => __( 'Select the border radius', 'mig-fx' ),
						'default' => 'normal',
					),
					'background' => array(
						'values' => array(),
						'desc' => __( 'Choose the background color', 'mig-fx' ),
						'default' => '#000000',
						'type' => 'color',
					),
					
					'backgroundhover' => array(
						'values' => array(),
						'desc' => __( 'Choose the over background color', 'mig-fx' ),
						'default' => '#f55a02',
						'type' => 'color',
					),
					
					'text' => array(
						'values' => array(),
						'desc' => __( 'Text of the button', 'mig-fx' ),
						'default' => 'view',
					),
					
					
					'textcolor' => array(
						'values' => array(),
						'desc' => __( 'Pick the color of the text', 'mig-fx' ),
						'default' => '#ffffff',
						'type' => 'color',
					),
					
					'link' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid URL for this button', 'mig-fx' ),
						'default' => '#',
					),
					
					'target' => array(
						'values' => array(
							'_self',
							'_new',
						),
						'desc' => __( 'Select the link destiny', 'mig-fx' ),
					),	
				),
				
			'desc' => __( 'Simple Button', 'mig-fx' )
			),
			
			/*===================
			FLOATING
			=====================
			*/
			'fx_floating' => array(
				'name' => 'Floatin',
				'type' => 'wrap',
				'atts' => array(
					'background' => array(
						'values' => array(),
						'desc' => __( 'Choose the background color of the floating box', 'mig-fx' ),
						'default' => '#000000',
						'type' => 'color',
					),
					
					'size' => array(
						'values' => array(
							'one-half',
							'one-third',
							'one-fourth',
							'full',
							
						),
						'desc' => __( 'Select the size', 'mig-fx' ),				
					),
					
					'last' => array(
						'values' => array(
							'no',
							'yes',
						),
						'desc' => __( 'Is this the last box of the row?', 'mig-fx' )
					),
					
					'textcolor' => array(
						'values' => array(),
						'desc' => __( 'Pick the color of the text', 'mig-fx' ),
						'default' => '#ffffff',
						'type' => 'color',
					),

					
					'caption' => array(
						'values' => array(),
						'desc' => __( 'Text of the tooltip', 'mig-fx' ),
						'default' => 'Info of the floating box',
					),
					
					
					
				),
				
			'desc' => __( 'Floating box', 'mig-fx' ),
			'content' => __( 'Paste content here', 'mig-fx' ),
			),
			
			
			/*===================
			ICON
			=====================
			*/
			'fx_icon' => array(
				'name' => 'Animated Icon',
				'type' => 'single',
				'atts' => array(
					'background' => array(
						'values' => array(),
						'desc' => __( 'Choose the background color', 'mig-fx' ),
						'default' => '#6563ff',
						'type' => 'color',
					),
					
					'icon' => array(
						'values' => $icons,
						'desc' => __( 'Choose an icon', 'mig-fx' ),
					),
					
					'customicon' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid image URL to use as icon instead the above option', 'mig-fx' )
					),
					
					
					'size' => array(
						'values' => array(
						'big',
						'normal',
						'small',
						),
						'desc' => __( 'Select a size', 'mig-fx' ),
					),
					
					'url' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid URL for this icon', 'mig-fx' ),

					),

				),
				
			'desc' => __( 'Animated Icon', 'mig-fx' ),
			),
			
			/*===================
			WIDGET
			=====================
			*/
			
			'fx_widget' => array(
				'name' => 'Widget everywhere',
				'type' => 'single',
				'atts' => array(
					'background' => array(
						'values' => array(),
						'desc' => __( 'Choose the background color', 'mig-fx' ),
						'default' => '#000000',
						'type' => 'color',
					),
					
					'textcolor' => array(
						'values' => array(),
						'desc' => __( 'Choose the text color', 'mig-fx' ),
						'default' => '#ffffff',
						'type' => 'color',
					),
					
					'linkcolor' => array(
						'values' => array(),
						'desc' => __( 'Choose the link color', 'mig-fx' ),
						'default' => '#ffffff',
						'type' => 'color',
					),
					
					'title' => array(
						'values' => array(),
						'desc' => __( 'Main title of the widget area', 'mig-fx' ),
						'default' => 'Widget area'
					),
					
					
				),
				
			'desc' => __( 'Animated Widget area', 'mig-fx' ),
			),
			
			/*===================
			EMPTY SPACE
			=====================
			*/
			
			'fx_emptyspace' => array(
				'name' => 'Widget everywhere',
				'type' => 'single',
				'atts' => array(
				),
				
			'desc' => __( 'Vertical Space (no animation)', 'mig-fx' ),
			),
			
			/*===================
			DIVIDER
			=====================
			*/
			
			'fx_divider' => array(
				'name' => 'Divider',
				'type' => 'single',
				'atts' => array(
					'color' => array(
						'values' => array(),
						'type' => 'color',
						'default' => '#dddddd',
						'desc' => 'Color of the line',
					),
				),
				
			'desc' => __( 'Horizontal line divider (no animation)', 'mig-fx' ),
			),
			
			/*===================
			COLORED LINK
			=====================
			*/
			
			'fx_coloredlink' => array(
				'name' => 'Widget everywhere',
				'type' => 'single',
				'atts' => array(
					'color' => array(
						'values' => array(),
						'desc' => __( 'Select the normal', 'mig-fx' ),
						'type' => 'color',
						'default' => '#000000',
					),
					'size' => array(
						'values' => array(
						'big',
						'normal',
						'small',
						),
						'desc' => __( 'Select the size', 'mig-fx' ),
					),
						
					'hovercolor' => array(
						'values' => array(),
						'desc' => __( 'Select the over color', 'mig-fx' ),
						'type' => 'color',
						'default' => '#007372',
					),	
					'url' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid URL ', 'mig-fx' ),
					),	
					
					'text' => array(
						'values' => array(),
						'desc' => __( 'Text of the link', 'mig-fx' ),

					),	
				),
				
			'desc' => __( 'Colored Link', 'mig-fx' ),
			),
			
			
			/*===================
			SOCIAL ICONS
			=====================
			*/
			
			'fx_socialicon' => array(
				'name' => 'Social Icon',
				'type' => 'single',
				'atts' => array(
								
					'url' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid URL ', 'mig-fx' ),
					),	
					
					'target' => array(
						'values' => array(
							'_self',
							'_new',
						),
						'desc' => __( 'Select the link destiny', 'mig-fx' ),
					),	
					
					
					'effect' => array(
						'values' => array(
							'one',
							'two',
						),
						'desc' => __( 'Select the effect ', 'mig-fx' ),
					),	
					
					'icon' => array(
						'values' => array(
						'addthis',
						'aim',
						'aim2',
						'apple',
						'bebo',
						'behance',
						'blogger',
						'brightkite',
						'cargo',
						'delicious',
						'design_bump',
						'designfloat',
						'designmoo',
						'deviantart',
						'digg',
						'dopplr',
						'dribbble',
						'email',
						'ember',
						'evernote',
						'facebook',
						'flickr',
						'friendfeed',
						'github',
						'google',
						'google_buzz',
						'google_talk',
						'googlemaps',
						'lastfm',
						'linkedin',
						'livejournal',
						'mixx',
						'mobileme',
						'msn',
						'myspace',
						'netvibes',
						'newsvine',
						'orkut',
						'pandora',
						'paypal',
						'picasa',
						'posterous',
						'qik',
						'reddit',
						'rss',
						'sharethis',
						'skype',
						'slashdot',
						'squidoo',
						'stumbleupon',
						'technorati',
						'tumblr',
						'twitter',
						'viddler',
						'vimeo',
						'virb',
						'windows',
						'wordpress',
						'xing',
						'yahoo',
						'yahoo_buzz',
						'yelp',
						'youtube',
						),
						'desc' => __( 'Select the social icon', 'mig-fx' ),

					),
					
					'customicon' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid image URL to use as icon instead the above option', 'mig-fx' )
					),
						
				),
				
			'desc' => __( 'Animated Social Icon', 'mig-fx' ),
			),
			
			
			/*===================
			OVERCAPTION
			=====================
			*/
			
			'fx_overcaption' => array(
				'name' => 'Widget everywhere',
				'type' => 'wrap',
				'atts' => array(
					'size' => array(
						'values' => array(
							'one-half',
							'one-third',
							'one-fourth',
							'full',
							
						),
						'desc' => __( 'Select the size', 'mig-fx' ),				
					),
					
					'last' => array(
						'values' => array(
							'no',
							'yes',
						),
						'desc' => __( 'Is this the last box of the row?', 'mig-fx' )
					),
					
					
					'url' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid URL ', 'mig-fx' ),
					),	
					
					'buttontext' => array(
						'values' => array(),
						'desc' => __( 'Text of the link', 'mig-fx' ),

					),
					
					'caption' => array(
						'values' => array(),
						'desc' => __( 'Caption', 'mig-fx' ),

					),	
					
					'background' => array(
						'values' => array(),
						'desc' => __( 'Select the over color', 'mig-fx' ),
						'type' => 'color',
						'default' => '#ba0000',
					),	
					
				),
				
			'desc' => __( 'Box with caption', 'mig-fx' ),
			'content' => 'Paste content here',
			),
			
			/*===================
			SPOILER
			=====================
			*/
			/*
			'fx_spoiler' => array(
				'name' => 'Spoiler',
				'type' => 'wrap',
				'atts' => array(
					'title' => array(
						'values' => array( ),
						'default' => __( 'Spoiler title', 'mig-fx' ),
						'desc' => __( 'Spoiler title', 'mig-fx' )
					),
					'open' => array(
						'values' => array(
							'0',
							'1'
						),
						'default' => '0',
						'desc' => __( 'Is spoiler open?', 'mig-fx' )
					),
					'style' => array(
						'values' => array(
							'1',
							'2'
						),
						'default' => '1',
						'desc' => __( 'Spoiler style', 'mig-fx' )
					)
				),
				'content' => __( 'Hidden content', 'mig-fx' ),
				'desc' => __( 'Spoiler', 'mig-fx' )
			),
			
			*/
			
			/*===================
			ICON MENU
			=====================
			*/
			'fx_iconmenu' => array(
				'name' => 'Icon Menu',
				'type' => 'single',
				'atts' => array(
					'title' => array(
						'values' => array( ),
						'desc' => __( 'Menu Title', 'mig-fx' )
					),
					
					'color' => array(
						'values' => array( ),
						'desc' => __( 'Menu Color', 'mig-fx' ),
						'type' => 'color',
						'default' => '#aef625'
					),
					
					'size' => array(
						'values' => array( 
						'normal',
						'small',
						),
						'desc' => __( 'Select the size', 'mig-fx' )
					),
					
					'side' => array(
						'values' => array( 
						'left',
						'right',
						),
						'desc' => __( 'Select the side', 'mig-fx' )
					),
					
					
					'linkone' => array(
						'values' => array( ),
						'desc' => __( 'Insert a valid URL for this button', 'mig-fx' )
					),
					
					'iconone' => array(
						'values' => $icons,
						'desc' => __( 'Select an icon', 'mig-fx' )
					),
					
					'customiconone' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid image URL to use as icon instead the above option', 'mig-fx' )
					),

					'linktwo' => array(
						'values' => array( ),
						'desc' => __( 'Insert a valid URL for this button', 'mig-fx' )
					),
					
					'icontwo' => array(
						'values' => $icons,
						'desc' => __( 'Select an icon', 'mig-fx' )
					),
					
					'customicontwo' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid image URL to use as icon instead the above option', 'mig-fx' )
					),
					
					
					'linkthree' => array(
						'values' => array( ),
						'desc' => __( 'Insert a valid URL for this button', 'mig-fx' )
					),
					
					'iconthree' => array(
						'values' => $icons,
						'desc' => __( 'Select an icon', 'mig-fx' )
					),
					
					'customiconthree' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid image URL to use as icon instead the above option', 'mig-fx' )
					),
					
					'linkfour' => array(
						'values' => array( ),
						'desc' => __( 'Insert a valid URL for this button', 'mig-fx' )
					),
					
					'iconfour' => array(
						'values' => $icons,
						'desc' => __( 'Select an icon', 'mig-fx' )
					),
					'customiconfour' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid image URL to use as icon instead the above option', 'mig-fx' )
					),
					
					'linkfive' => array(
						'values' => array( ),
						'desc' => __( 'Insert a valid URL for this button', 'mig-fx' )
					),
					
					'iconfive' => array(
						'values' => $icons,
						'desc' => __( 'Select an icon', 'mig-fx' )
					),
					
					'customiconfive' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid image URL to use as icon instead the above option', 'mig-fx' )
					),
					
					'linksix' => array(
						'values' => array( ),
						'desc' => __( 'Insert a valid URL for this button', 'mig-fx' )
					),
					
					'iconsix' => array(
						'values' => $icons,
						'desc' => __( 'Select an icon', 'mig-fx' )
					),
					
					'customiconsix' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid image URL to use as icon instead the above option', 'mig-fx' )
					),
					
					'linkseven' => array(
						'values' => array( ),
						'desc' => __( 'Insert a valid URL for this button', 'mig-fx' )
					),
					
					'iconseven' => array(
						'values' => $icons,
						'desc' => __( 'Select an icon', 'mig-fx' )
					),
					
					'customiconseven' => array(
						'values' => array(),
						'desc' => __( 'Insert a valid image URL to use as icon instead the above option', 'mig-fx' )
					),
					
				),	
				'desc' => __( 'Icon menu bar', 'mig-fx' )
			),
			
			
						
		# basic shortcodes - end
		'basic-shortcodes-close' => array(
			'type' => 'closegroup'
		),
	);

		if ( $shortcode )
			return $shortcodes[$shortcode];
		else
			return $shortcodes;
	}

?>