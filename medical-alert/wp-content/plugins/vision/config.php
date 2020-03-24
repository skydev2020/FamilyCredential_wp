<?php
/*---------------------------------------*/
/* Accordions
/*---------------------------------------*/
$tt_shortcodes['accordions'] = array(
	'params' => array(),
	'shortcode' => '[vision_accordion_set] {{child_shortcode}}[/vision_accordion_set]',
	'no_preview' => true,
	
	// can be cloned and re-arranged
	'child_shortcode' => array(
		'params' => array(
			'title' => array(
				'type' => 'text',
				'label' => __('Accordion Title', 'framework_localize'),
				'desc' => __('Add a title for this accordion section.', 'framework_localize'),
				'std' => ''
			),
			
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Accordion Content', 'framework_localize'),
				'desc' => __('Enter the content for this accordion section.', 'framework_localize'),
			),
			
			'active' => array(
			'type' => 'select',
			'label' => __('Active Accordion?', 'framework_localize'),
			'desc' => __('Should this accordion section be active by default?', 'framework_localize'),
			'options' => array(
				'no' => 'No',
				'yes' => 'Yes',
			)),
		),
		'shortcode' => '[vision_accordion title="{{title}}" active="{{active}}"] {{content}} [/vision_accordion] ',
		'clone_button' => __('+ Add Another Accordion Slide', 'framework_localize')
	)
);



/*---------------------------------------*/
/* Buttons
/*---------------------------------------*/
$tt_shortcodes['button'] = array(
	'params' => array(
		'size' => array(
			'type' => 'select',
			'label' => __('Size', 'framework_localize'),
			'options' => array(
				'small' => 'Small',
				'large' => 'Large',
				'jumbo' => 'Jumbo'
			)
		),
		
		'color' => array(
			'type' => 'select',
			'label' => __('Color', 'framework_localize'),
			'desc' => __('<a href="http://s3.truethemes.net/plugin-assets/shortcode-style-guide/style-guide.html" target="_blank">View available colors &rarr;</a>', 'framework_localize'),
			'options' => array(
				'autumn' => 'Autumn',
				'black' => 'Black',
				'black-2' => 'Black 2',
				'blue' => 'Blue',
				'blue-grey' => 'Blue Grey',
				'cool-blue' => 'Cool Blue',
				'coffee' => 'Coffee',
				'fire' => 'Fire',
				'golden' => 'Golden',
				'green' => 'Green',
				'green-2' => 'Green 2',
				'grey' => 'Grey',
				'lime-green' => 'Lime Green',
				'navy' => 'Navy',
				'orange' => 'Orange',
				'periwinkle' => 'Periwinkle',
				'pink' => 'Pink',
				'purple' => 'Purple',
				'purple-2' => 'Purple 2',
				'red' => 'Red',
				'red-2' => 'Red 2',
				'royal-blue' => 'Royal Blue',
				'silver' => 'Silver',
				'sky-blue' => 'Sky Blue',
				'teal-grey' => 'Teal Grey',
				'teal' => 'Teal',
				'teal-2' => 'Teal 2',
				'white' => 'White',
			)
		),
		
		'content' => array(
			'std' => 'Button Label',
			'type' => 'text',
			'label' => __('Label', 'framework_localize'),
	),
	
	'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Link URL', 'framework_localize'),
			'desc' => __('ie. http://www.yoursite.com/awesome-page', 'framework_localize')
		),
		
		'target' => array(
			'type' => 'select',
			'label' => __('Link Target', 'framework_localize'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_blank' => '_blank',
				'_top' => '_top',
			)),
			
			'button_lightbox_content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Content', 'framework_localize'),
			'desc' => __('Enter content URL or leave blank to disable lightbox.<br /><a href="https://s3.amazonaws.com/Plugin-Vision/lightbox-samples.html" target="_blank">Lightbox content samples &rarr;</a>', 'framework_localize')
	),
	
	'button_lightbox_description' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Text', 'framework_localize'),
			'desc' => __('Short description displayed within the lightbox.', 'framework_localize')
	),
),
		
	'shortcode' => '[vision_button url="{{url}}" class="button" size="{{size}}" color="{{color}}" target="{{target}}" lightbox_content="{{button_lightbox_content}}" lightbox_description="{{button_lightbox_description}}"] {{content}} [/vision_button]',
);


/*---------------------------------------*/
/* Blog Posts
/*---------------------------------------*/
$tt_shortcodes['blog-posts'] = array(
	'no_preview' => true,
	'params' => array(
		
		'count' => array(
			'type' => 'text',
			'std' => '3',
			'label' => __('Post Count', 'framework_localize'),
			'desc' => __('Enter the amount of posts you would like to display.', 'framework_localize'),
		),
		
		'charactercount' => array(
			'type' => 'text',
			'std' => '115',
			'label' => __('Character Count', 'framework_localize'),
			'desc' => __('Enter the amount of characters you would like to display for each blog post preview.', 'framework_localize'),
		),
		
		
		'postcategory' => array(
			'type' => 'text',
			'label' => __('Post Category(s)', 'framework_localize'),
			'desc' => __('Enter the post category(s) that you would like to display', 'framework_localize'),
		),
	),
		
	'shortcode' => '[vision_blog_posts count ="{{count}}" character_count="{{charactercount}}" post_category="{{postcategory}}"]',
);


/*---------------------------------------*/
/* Columns
/*---------------------------------------*/
$tt_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ',
	'no_preview' => true,
	
	
	// can be cloned and re-arrange
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'framework_localize'),
				'desc' => '',
				'options' => array(
					'one_half' => 'One Half',
					'one_third' => 'One Third',
					'one_fourth' => 'One Fourth',
					'one_fifth' => 'One Fifth',				
					'two_thirds' => 'Two Thirds',
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'framework_localize'),
				'desc' => '(you can also leave this field blank and insert the content later)',
			)
		),
		'shortcode' => '[vision_{{column}}] {{content}} [/vision_{{column}}] ',
		'clone_button' => __('+ Add Another Column', 'framework_localize')
	)
);


/*---------------------------------------*/
/* Content Boxes
/*---------------------------------------*/
$tt_shortcodes['content-boxes'] = array(
	'params' => array(		
		'style' => array(
			'type' => 'select',
			'label' => __('Color', 'framework_localize'),
			'desc' => __('<a href="http://s3.truethemes.net/plugin-assets/shortcode-style-guide/style-guide.html" target="_blank">View available colors &rarr;</a>', 'framework_localize'),
			'options' => array(
				'autumn' => 'Autumn',
				'black' => 'Black',
				'black-2' => 'Black 2',
				'blue' => 'Blue',
				'blue-grey' => 'Blue Grey',
				'cool-blue' => 'Cool Blue',
				'coffee' => 'Coffee',
				'fire' => 'Fire',
				'golden' => 'Golden',
				'green' => 'Green',
				'green-2' => 'Green 2',
				'grey' => 'Grey',
				'lime-green' => 'Lime Green',
				'navy' => 'Navy',
				'orange' => 'Orange',
				'periwinkle' => 'Periwinkle',
				'pink' => 'Pink',
				'purple' => 'Purple',
				'purple-2' => 'Purple 2',
				'red' => 'Red',
				'red-2' => 'Red 2',
				'royal-blue' => 'Royal Blue',
				'silver' => 'Silver',
				'sky-blue' => 'Sky Blue',
				'teal-grey' => 'Teal Grey',
				'teal' => 'Teal',
				'teal-2' => 'Teal 2',
			)
		),
		
		
		'title' => array(
				'std' => __('Content box title', 'framework_localize'),
				'type' => 'text',
				'label' => __('Title', 'framework_localize'),
			),
		
		
		
		'content' => array(
				'std' => __('Awesome content goes here.', 'framework_localize'),
				'type' => 'textarea',
				'label' => __('Content', 'framework_localize'),
			)),
		
	'shortcode' => '[vision_content_box style="{{style}}" title="{{title}}"] <p>{{content}}</p> [/vision_content_box]',
);



/*---------------------------------------*/
/* Dividers
/*---------------------------------------*/
$tt_shortcodes['dividers'] = array(
	'params' => array(
		'divider_style' => array(
			'type' => 'select',
			'label' => __('Style', 'framework_localize'),
			'options' => array(
				'hr-dotted' => 'Dotted - Single line',
				'hr-dotted-double' => 'Dotted - Double line',
				'hr-solid' => 'Solid - Single line',
				'hr-solid-double' => 'Solid - Double line',
			)
		),
	),
		
	'shortcode' => '[vision_divider style="{{divider_style}}"]',
);




/*---------------------------------------*/
/* Dropcaps
/*---------------------------------------*/
$tt_shortcodes['dropcaps'] = array(
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __('Style', 'framework_localize'),
			'options' => array(
				'round' => 'Round',
				'square' => 'Square',
				'text' => 'Text',
			)
		),
		
		'color' => array(
			'type' => 'select',
			'label' => __('Color', 'framework_localize'),
			'desc' => __('<a href="http://s3.truethemes.net/plugin-assets/shortcode-style-guide/style-guide.html" target="_blank">View available colors &rarr;</a>', 'framework_localize'),
			'options' => array(
				'autumn' => 'Autumn',
				'black' => 'Black',
				'black-2' => 'Black 2',
				'blue' => 'Blue',
				'blue-grey' => 'Blue Grey',
				'cool-blue' => 'Cool Blue',
				'coffee' => 'Coffee',
				'fire' => 'Fire',
				'golden' => 'Golden',
				'green' => 'Green',
				'green-2' => 'Green 2',
				'grey' => 'Grey',
				'lime-green' => 'Lime Green',
				'navy' => 'Navy',
				'orange' => 'Orange',
				'periwinkle' => 'Periwinkle',
				'pink' => 'Pink',
				'purple' => 'Purple',
				'purple-2' => 'Purple 2',
				'red' => 'Red',
				'red-2' => 'Red 2',
				'royal-blue' => 'Royal Blue',
				'silver' => 'Silver',
				'sky-blue' => 'Sky Blue',
				'teal-grey' => 'Teal Grey',
				'teal' => 'Teal',
				'teal-2' => 'Teal 2',
			)
		),
		
	'content' => array(
				'std' => __('1', 'framework_localize'),
				'type' => 'textarea',
				'label' => __('Content', 'framework_localize'),
			)),
		
	'shortcode' => '[vision_dropcap style="{{style}}" color="{{color}}"]{{content}}[/vision_dropcap]',
);



/*---------------------------------------*/
/* Email Encoder
/*---------------------------------------*/
$tt_shortcodes['mailto'] = array(
	'no_preview' => true,
	'params' => array(
		
		'email' => array(
				'std' => 'you@yourdomain.com',
				'type' => 'text',
				'label' => __('Email Address', 'framework_localize'),
				'desc' => __('Enter the email address to be encoded.', 'framework_localize'),
			)),
		
	'shortcode' => '[vision_mailto]{{email}}[/vision_mailto]',
);


/*---------------------------------------*/
/* Highlight Text
/*---------------------------------------*/
$tt_shortcodes['highlight'] = array(
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __('Style', 'framework_localize'),
			'options' => array(
				'style-1' => 'Style 1',
				'style-2' => 'Style 2',
			)
		),
		
		'color' => array(
			'type' => 'select',
			'label' => __('Color', 'framework_localize'),
			'options' => array(
				'autumn' => 'Autumn',
				'black' => 'Black',
				'blue-grey' => 'Blue Grey',
				'cool-blue' => 'Cool Blue',
				'coffee' => 'Coffee',
				'fire' => 'Fire',
				'golden' => 'Golden',
				'green' => 'Green',
				'lime-green' => 'Lime Green',
				'periwinkle' => 'Periwinkle',
				'pink' => 'Pink',
				'purple' => 'Purple',
				'red' => 'Red',
				'royal-blue' => 'Royal Blue',
				'silver' => 'Silver',
				'sky-blue' => 'Sky Blue',
				'teal-grey' => 'Teal Grey',
				'teal' => 'Teal',
				
			)
		),
		
		'content' => array(
				'std' => __('This text is highlighted', 'framework_localize'),
				'type' => 'textarea',
				'label' => __('Content', 'framework_localize'),
			)),
		
	'shortcode' => '[vision_highlight color="{{color}}" style="{{style}}"]{{content}}[/vision_highlight]',
);



/*---------------------------------------*/
/* Icons
/*---------------------------------------*/
$tt_shortcodes['icons'] = array(
	'params' => array(
		
		'style' => array(
			'type' => 'select',
			'label' => __('Icon', 'framework_localize'),
			'options' => array(
				'icon-alarm' => 'Alarm',
				'icon-arrow-down-a' => 'Arrow Down',
				'icon-arrow-down-b' => 'Arrown Down 2',
				'icon-arrow-up-a' => 'Arrow Up',
				'icon-arrow-up-b' => 'Arrown Up 2',
				'icon-calculator' => 'Calculator',
				'icon-calendar-day' => 'Calendar - Day',
				'icon-calendar-month' => 'Calendar - Month',
				'icon-camera' => 'Camera',
				'icon-cart-add' => 'Cart - Ecommerce',
				'icon-caution' => 'Caution',
				'icon-cellphone' => 'Cell Phone',
				'icon-chat' => 'Chat (speech bubble)',
				'icon-chat-2' => 'Chat 2 (speech bubble)',
				'icon-checklist' => 'Checklist',
				'icon-checkmark' => 'Checkmark',
				'icon-clipboard' => 'Clipboard',
				'icon-clock' => 'Clock',
				'icon-gear' => 'Cog (sprocket)',
				'icon-contacts' => 'Contacts',
				'icon-crate' => 'Crate (wooden box)',
				'icon-database' => 'Database',
				'icon-document-edit' => 'Document edit',			
				'icon-dvd' => 'DVD',
				'icon-email-send' => 'Email',
				'icon-flag' => 'Flag',
				'icon-games' => 'Games',
				'icon-globe' => 'Globe',
				'icon-globe-download' => 'Globe - download',
				'icon-globe-upload' => 'Globe - upload',
				'icon-drive' => 'Hard Drive (HDD)',
				'icon-hdtv' => 'HDTV',
				'icon-heart' => 'Heart',		
				'icon-history' => 'History',
				'icon-home' => 'Home',
				'icon-info' => 'Info',
				'icon-laptop' => 'Laptop',
				'icon-light-on' => 'Lightbulb',
				'icon-lock-closed' => 'Lock',
				'icon-magnify' => 'Magnifying Glass',
				'icon-megaphone' => 'Megaphone',
				'icon-money' => 'Money',
				'icon-movie' => 'Movie',
				'icon-mp3' => 'MP3 Player',
				'icon-ms-word' => 'MS Word Document',
				'icon-music' => 'Music',
				'icon-network' => 'Network',
				'icon-news' => 'News',
				'icon-notebook' => 'Notebook',
				'icon-pdf' => 'PDF Document',
				'icon-photos' => 'Photos',	
				'icon-notebook' => 'Notebook',
				'icon-refresh' => 'Refresh',
				'icon-rss' => 'RSS',
				'icon-shield-blue' => 'Shield (blue)',
				'icon-shield-green' => 'Shield (green)',
				'icon-smart-phone' => 'Smartphone',
				'icon-star' => 'Star',
				'icon-support' => 'Support',	
				'icon-tools' => 'Tools',
				'icon-user-group' => 'Users',
				'icon-vcard' => 'vCard',
				'icon-video-camera' => 'Video Camera',
				'icon-x' => 'X'
			)
		),
	
	'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Link URL', 'framework_localize'),
			'desc' => __('Enter a URL or leave blank to disable linking.<br />ie. http://www.yoursite.com/awesome-page', 'framework_localize')
		),
		
		
		'target' => array(
			'std' => '_self',
			'type' => 'select',
			'label' => __('Link Target', 'framework_localize'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_blank' => '_blank',
				'_top' => '_top',
			)),
			

'icon_lightbox_content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Content', 'framework_localize'),
			'desc' => __('Enter content URL or leave blank to disable lightbox.<br /><a href="https://s3.amazonaws.com/Plugin-Vision/lightbox-samples.html" target="_blank">Lightbox content samples &rarr;</a>', 'framework_localize')
	),
	
	'icon_lightbox_description' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Text', 'framework_localize'),
			'desc' => __('Short description displayed within the lightbox.', 'framework_localize')
	),
),
		
	'shortcode' => '[vision_icon style="{{style}}" url="{{url}}" target="{{target}}" lightbox_content="{{icon_lightbox_content}}" lightbox_description="{{icon_lightbox_description}}"]Lorem Ipsum Dolor nulla vitae elit libero, a pharetra augue.[/vision_icon]',
);



/*---------------------------------------*/
/* Icons - Minimal
/*---------------------------------------*/
$tt_shortcodes['icons-mono'] = array(
	'params' => array(
		
		'style' => array(
			'type' => 'select',
			'label' => __('Icon', 'framework_localize'),
			'options' => array(
				'address_book' => 'Address Book',
				'alert' => 'Alert',
				'announcement' => 'Announcement',
				'calendar' => 'Calendar',
				'cog' => 'Cog',
				'comments' => 'Comments',
				'download' => 'Download',
				'edit' => 'Edit',
				'email' => 'Email',
				'file' => 'File',
				'home' => 'Home',
				'info' => 'Info',
				'movie' => 'Movie',
				'page-layout' => 'Page Layout',
				'pencil' => 'Pencil',
				'pictures' => 'Pictures',
				'restart' => 'Restart',
				'settings' => 'Settings',
				'support' => 'Support',
				'tags' => 'Tags',
				'upload' => 'Upload',
				'users' => 'Users',
				'v-card' => 'vCard',
				'zoom' => 'Zoom',
				
			)
		),
		
	
	'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Link URL', 'framework_localize'),
			'desc' => __('Enter a URL or leave blank to disable linking. (ie. http://www.google.com)', 'framework_localize')
		),
		
		
		'target' => array(
			'std' => '_self',
			'type' => 'select',
			'label' => __('Link Target', 'framework_localize'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_blank' => '_blank',
				'_top' => '_top',
			)),

'icon_lightbox_content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Content', 'framework_localize'),
			'desc' => __('Enter content URL or leave blank to disable lightbox.<br /><a href="https://s3.amazonaws.com/Plugin-Vision/lightbox-samples.html" target="_blank">Lightbox content samples &rarr;</a>', 'framework_localize')
	),
	
	'icon_lightbox_description' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Text', 'framework_localize'),
			'desc' => __('Short description displayed within the lightbox.', 'framework_localize')
	),		
),
		
	'shortcode' => '[vision_minimal_icon style="{{style}}" url="{{url}}" target="{{target}}" lightbox_content="{{icon_lightbox_content}}" lightbox_description="{{icon_lightbox_description}}"]Lorem Ipsum Dolor nulla vitae elit libero, a pharetra augue.[/vision_minimal_icon]',
);


/*---------------------------------------*/
/* Notification Boxes
/*---------------------------------------*/
$tt_shortcodes['notifications'] = array(
	'params' => array(		
		'style' => array(
			'type' => 'select',
			'label' => __('Style', 'framework_localize'),
			'options' => array(
				'success' => 'Success',
				'error' => 'Error',
				'warning' => 'Warning',
				'tip' => 'Tip',
				'neutral' => 'Neutral',
			)
		),
		
		'size' => array(
			'std' => '12px',
			'type' => 'text',
			'label' => __('Font Size', 'framework_localize'),
	),
	
	'closeable' => array(
			'type' => 'select',
			'label' => __('Closeable?', 'framework_localize'),
			'desc' => __('Select True to make this box closeable on click.', 'framework_localize'),
			'options' => array(
				'true' => 'True',
				'false' => 'False',
			)
		),
		
		'content' => array(
				'std' => 'Awesome content goes here.',
				'type' => 'textarea',
				'label' => __('Content', 'framework_localize'),
			)),
		
	'shortcode' => '[vision_notification style="{{style}}" font_size="{{size}}" closeable="{{closeable}}"] {{content}} [/vision_notification]',
);



/*---------------------------------------*/
/* Pricing Boxes
/*---------------------------------------*/
$tt_shortcodes['pricing-box'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ',
	'no_preview' => true,
	
	// can be cloned and re-arrange
	'child_shortcode' => array(
		'params' => array(
		
		'column' => array(
				'type' => 'select',
				'label' => __('Width', 'framework_localize'),
				'desc' => 'Select a width for this pricing box.',
				'options' => array(
					'one_half' => 'One Half',
					'one_third' => 'One Third',
					'one_fourth' => 'One Fourth',
					'one_fifth' => 'One Fifth',
				)
			),
		
	
		'style' => array(
				'type' => 'select',
				'label' => __('Style', 'framework_localize'),
				'desc' => '<a href="http://s3.truethemes.net/plugin-assets/vision-pricing-samples.png" target="_blank">View available styles &rarr;</a>',
				'options' => array(
					'style-1' => 'Style 1',
					'style-2' => 'Style 2',
				)
			),

			
		'color' => array(
			'type' => 'select',
			'label' => __('Highlight Color', 'framework_localize'),
			'desc' => __('<a href="http://s3.truethemes.net/plugin-assets/shortcode-style-guide/style-guide.html" target="_blank">View available colors &rarr;</a>', 'framework_localize'),
			'options' => array(
				'autumn' => 'Autumn',
				'black' => 'Black',
				'black-2' => 'Black 2',
				'blue' => 'Blue',
				'blue-grey' => 'Blue Grey',
				'cool-blue' => 'Cool Blue',
				'coffee' => 'Coffee',
				'fire' => 'Fire',
				'golden' => 'Golden',
				'green' => 'Green',
				'green-2' => 'Green 2',
				'grey' => 'Grey',
				'lime-green' => 'Lime Green',
				'navy' => 'Navy',
				'orange' => 'Orange',
				'periwinkle' => 'Periwinkle',
				'pink' => 'Pink',
				'purple' => 'Purple',
				'purple-2' => 'Purple 2',
				'red' => 'Red',
				'red-2' => 'Red 2',
				'royal-blue' => 'Royal Blue',
				'silver' => 'Silver',
				'sky-blue' => 'Sky Blue',
				'teal-grey' => 'Teal Grey',
				'teal' => 'Teal',
				'teal-2' => 'Teal 2',
			)
		),
		
		
		'plan' => array(
			'std' => 'pro',
			'type' => 'text',
			'label' => __('Plan', 'framework_localize'),
			'desc' => __('ie. basic, pro, premium', 'framework_localize')
	),
	
	'currency' => array(
			'std' => '$',
			'type' => 'text',
			'label' => __('Currency Symbol', 'framework_localize'),
			'desc' => __('ie. $, &euro;', 'framework_localize')
	),
	
	'price' => array(
			'std' => '29',
			'type' => 'text',
			'label' => __('Price', 'framework_localize'),
			'desc' => __('ie. 29', 'framework_localize')
	),
	
	'term' => array(
			'std' => 'per month',
			'type' => 'text',
			'label' => __('Term', 'framework_localize'),
			'desc' => __('ie. per month, per year', 'framework_localize')
	),
	
	'button_label' => array(
			'std' => 'Sign up',
			'type' => 'text',
			'label' => __('Button Label', 'framework_localize'),
			'desc' => __('ie. sign up, learn more', 'framework_localize')
	),
	
	'button_size' => array(
			'type' => 'select',
			'label' => __('Button Size', 'framework_localize'),
			'options' => array(
				'small' => 'Small',
				'large' => 'Large',
				'jumbo' => 'Jumbo'
			)
		),
		
		'button_color' => array(
			'type' => 'select',
			'label' => __('Button Color', 'framework_localize'),
			'options' => array(
				'autumn' => 'Autumn',
				'black' => 'Black',
				'black-2' => 'Black 2',
				'blue' => 'Blue',
				'blue-grey' => 'Blue Grey',
				'cool-blue' => 'Cool Blue',
				'coffee' => 'Coffee',
				'fire' => 'Fire',
				'golden' => 'Golden',
				'green' => 'Green',
				'green-2' => 'Green 2',
				'grey' => 'Grey',
				'lime-green' => 'Lime Green',
				'navy' => 'Navy',
				'orange' => 'Orange',
				'periwinkle' => 'Periwinkle',
				'pink' => 'Pink',
				'purple' => 'Purple',
				'purple-2' => 'Purple 2',
				'red' => 'Red',
				'red-2' => 'Red 2',
				'royal-blue' => 'Royal Blue',
				'silver' => 'Silver',
				'sky-blue' => 'Sky Blue',
				'teal-grey' => 'Teal Grey',
				'teal' => 'Teal',
				'teal-2' => 'Teal 2',
				'white' => 'White',	
			)
		),
	
	'button_url' => array(
			'std' => 'http://www.',
			'type' => 'text',
			'label' => __('Button URL', 'framework_localize'),
			'desc' => __('ie. http://www.your-website.com/purchase', 'framework_localize')
		),
		
		'button_target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'framework_localize'),
			'desc' => __('"_self" opens URL in same window &nbsp; / &nbsp; "_blank" opens URL in new window', 'framework_localize'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_blank' => '_blank',
				'_top' => '_top',
			)),
			
			
			'description' => array(
			'std' => '<ul>
<li><strong>50 GB</strong> Sample item 1</li>
<li><strong>100 Emails</strong> Sample item 2</li>
</ul>',
			'type' => 'textarea',
			'label' => __('Description', 'framework_localize'),
	),		
			
		),
		
		'shortcode' => '[vision_{{column}}] [vision_pricing_box style="{{style}}" color="{{color}}" plan="{{plan}}" currency="{{currency}}" price="{{price}}" term="{{term}}" button_label="{{button_label}}" button_size="{{button_size}}" button_color="{{button_color}}" button_url="{{button_url}}" button_target="{{button_target}}"] {{description}} [/vision_pricing_box][/vision_{{column}}]',
		'clone_button' => __('+ Add Another Pricing Box', 'framework_localize')
	)
);


/*---------------------------------------*/
/* Pull Quotes
/*---------------------------------------*/
$tt_shortcodes['pull-quotes'] = array(
	'params' => array(		
		'style' => array(
			'type' => 'select',
			'label' => __('Style', 'framework_localize'),
			'options' => array(
				'1' => 'Style 1',
				'2' => 'Style 2',
				'3' => 'Style 3',
				'4' => 'Style 4',
			)
		),
		
	
	'align' => array(
			'type' => 'select',
			'label' => __('Align / Float', 'framework_localize'),
			'options' => array(
				'' => 'Left',
				'right' => 'Right',
				'center' => 'Center',
			)
		),
		
		'content' => array(
				'std' => 'Awesome content goes here.',
				'type' => 'textarea',
				'label' => __('Content', 'framework_localize'),
			)),
		
	'shortcode' => '[vision_pullquote style="{{style}}" align="{{align}}"] {{content}} [/vision_pullquote]',
);


/*---------------------------------------*/
/* Social Icons
/*---------------------------------------*/
$tt_shortcodes['social-icons'] = array(
	'params' => array(		
		'design' => array(
			'type' => 'select',
			'label' => __('Design Style', 'framework_localize'),
			'desc' => __('Note: \'Default\' pulls in your theme\'s default link styling.', 'framework_localize'),
			'options' => array(
				'default' => 'Default',
				'color' => 'Color',
				'png' => 'PNG',
				'square' => 'Square',
			)
		),
		
	
	'icon_style' => array(
			'std' => 'normal',
			'type' => 'select',
			'label' => __('Icon Type', 'framework_localize'),
			'options' => array(
				'normal' => 'Normal',
				'round' => 'Round',
			)
		),
		
		'twitter' => array(
				'std' => 'http://twitter.com/your-user-name',
				'type' => 'text',
				'label' => __('Twitter', 'framework_localize'),
				'desc' => __('Enter the full URL to any social account that you\'d like to display', 'framework_localize')
			),
			
		'facebook' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Facebook', 'framework_localize'),
			),
			
		'dribbble' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Dribbble', 'framework_localize'),
			),
			
		'linkedin' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Linkedin', 'framework_localize'),
			),
			
		'vimeo' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Vimeo', 'framework_localize'),
			),
			
		'flickr' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Flickr', 'framework_localize'),
			),
			
		'youtube' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('YouTube', 'framework_localize'),
			),
			
		'pinterest' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Pinterest', 'framework_localize'),
			),
			
		'google' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Google+', 'framework_localize'),
			),
			
		'rss' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('RSS', 'framework_localize'),
			),
			
		'mail' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Email', 'framework_localize'),
				'desc' => __('URL example: mailto:you@yourdomain.com', 'framework_localize')
			),
			
		'skype' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Skype', 'framework_localize'),
			),
			
		'wordpress' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Wordpress', 'framework_localize'),
			),
			
		'instagram' => array(
				'std' => '',
				'type' => 'text',
				'label' => __('Instagram', 'framework_localize'),
			)),
	
		
	'shortcode' => '[vision_social design="{{design}}" icon_style="{{icon_style}}" twitter="{{twitter}}" facebook="{{facebook}}" dribbble="{{dribbble}}" linkedin="{{linkedin}}" vimeo="{{vimeo}}" flickr="{{flickr}}" youtube="{{youtube}}" pinterest="{{pinterest}}" google="{{google}}" rss="{{rss}}" mail="{{mail}}" skype="{{skype}}" wordpress="{{wordpress}}" instagram="{{instagram}}"]',
);


/*---------------------------------------*/
/* Tabs
/*---------------------------------------*/
$tt_shortcodes['tabs'] = array(
	'params' => array(
	'style' => array(
			'type' => 'select',
			'label' => __('Tab Style', 'framework_localize'),
			'options' => array(
				'vertical' => 'Vertical',
				'horizontal' => 'Horizontal',
			))),
	'shortcode' => '[vision_tabset style="{{style}}"] {{child_shortcode}}[/vision_tabset]',
	'no_preview' => true,
	
	// can be cloned and re-arranged
	'child_shortcode' => array(
		'params' => array(
			'title' => array(
				'type' => 'text',
				'label' => __('Tab Title', 'framework_localize'),
				'std' => ''
			),
			
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Tab Content', 'framework_localize'),
			),
			
			'active' => array(
			'type' => 'select',
			'label' => __('Active Tab?', 'framework_localize'),
			'desc' => __('Should this tab be active by default?', 'framework_localize'),
			'options' => array(
				'no' => 'No',
				'yes' => 'Yes',
			)),
		),
		'shortcode' => '[vision_tab title="{{title}}" active="{{active}}"] {{content}} [/vision_tab] ',
		'clone_button' => __('+ Add Another Tab', 'framework_localize')
	)
);


/*---------------------------------------*/
/* Testimonials
/*---------------------------------------*/
$tt_shortcodes['testimonials'] = array(
	'params' => array(),
	'shortcode' => '[vision_testimonial_set] {{child_shortcode}} [/vision_testimonial_set]',
	'no_preview' => true,
	
	
	// can be cloned and re-arrange
	'child_shortcode' => array(
		'params' => array(
			
		'client' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Customer/Client\'s Name', 'framework_localize'),
	),
			
			
			'testimonialtext' => array(
				'type' => 'textarea',
				'label' => __('Testimonial', 'framework_localize'),
			)
		),
		'shortcode' => '[vision_testimonial client="{{client}}"]{{testimonialtext}}[/vision_testimonial]',
		'clone_button' => __('+ Add Another Testimonial', 'framework_localize')
	)
);


/*---------------------------------------*/
/* Text Styles
/*---------------------------------------*/
$tt_shortcodes['text-styles'] = array(
	'no_preview' => true,
	'params' => array(
		'text_style' => array(
			'type' => 'select',
			'label' => __('Text Style', 'framework_localize'),
			'options' => array(
				'large-callout' => 'Large Callout Text',
			)
		),
		
		'content' => array(
				'type' => 'textarea',
				'label' => __('Content', 'framework_localize'),
			),
	),
		
	'shortcode' => '[vision_text style="{{text_style}}"] {{content}} [/vision_text]',
);