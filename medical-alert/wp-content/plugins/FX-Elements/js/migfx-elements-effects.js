jQuery(document).ready(function(){
		
		
/*================================Box Icon================================*/
	jQuery('.migfx_elements_iconbox_wrapper h3').css({margin: 0})
	
	jQuery('.migfx_elements_iconbox_wrapper').hover(
		function(){
			var boxicon_backgroundcolorhover = jQuery(this).attr('data-backgroundhover')
			jQuery(this).stop().animate({backgroundColor: boxicon_backgroundcolorhover})
		},
		function(){
			var boxicon_backgroundcolor = jQuery(this).attr('data-background')
			jQuery(this).stop().animate({backgroundColor: boxicon_backgroundcolor})
		}
	)
	
	
	jQuery('.migfx_elements_iconbox_button').hover(
		function(){
			var boxicon_buttonhover = jQuery(this).attr('data-buttonhover')
			jQuery(this).stop().animate({backgroundColor: boxicon_buttonhover})
		},
		function(){
			var boxicon_button = jQuery(this).attr('data-button')
			jQuery(this).stop().animate({backgroundColor: boxicon_button})
		}
	)


/*================================Simple Box & button & colored link ================================*/
	
	jQuery('.migfx_elements_simplebox_wrapper, .migfx_elements_button, .migfx_elements_coloredlink').hover(
		function(){
			var simplebox_backgroundcolorhover = jQuery(this).attr('data-backgroundhover')
			jQuery(this).stop().animate({backgroundColor: simplebox_backgroundcolorhover})
		},
		function(){
			var simplebox_backgroundcolor = jQuery(this).attr('data-background')
			jQuery(this).stop().animate({backgroundColor: simplebox_backgroundcolor})
		}
	)


/*================================ Colored link ================================*/
	
	jQuery('.migfx_elements_coloredlink').hover(
		function(){
			var coloredlinkhover = jQuery(this).attr('data-colorhover')
			jQuery(this).stop().animate({color: coloredlinkhover})
		},
		function(){
			var coloredlink = jQuery(this).attr('data-colornormal')
			jQuery(this).stop().animate({color: coloredlink})
	
		}
	)



/*================================ Top Message ================================*/

jQuery('.migfx_elements_topmessage_wrapper').prependTo('body')
jQuery('.migfx_elements_topmessage_close').click(function(){jQuery(this).parent().parent().slideUp(200, "linear")})



/*=============================== scroll to top ================================*/


	jQuery(window).scroll(function() {
		if(jQuery(this).scrollTop() != 0) {
			jQuery('.migfx_elements_backtotop').fadeIn();	
		} else {
			jQuery('.migfx_elements_backtotop').fadeOut();
		}
	});
 
	jQuery('.migfx_elements_backtotop').click(function() {
		jQuery('body,html').stop().animate({scrollTop:0},500);
	});	
	
/*=============================== Icons  ========================================*/

	jQuery('.migfx_elements_icon_wrapper').hover(
	
		function(){
			jQuery(this).stop().animate({opacity: '0.7'}, 200)
		},
		
		function(){
			jQuery(this).stop().animate({opacity: '1'}, 200)
		}
		
	)
	
/*=============================== Overcaption ========================================*/
	jQuery('.migfx_elements_overcaption_button a').css({color: '#ffffff', textDecoration: 'none'})
	jQuery('.migfx_elements_overcaption_overlay').css({opacity: 0})
	jQuery('.migfx_elements_overcaption_wrapper').hover(
	
		function(){
			jQuery(this).find('.migfx_elements_overcaption_overlay').stop().animate({opacity: 0.9}, 600)
		},
		
		function(){
			jQuery(this).find('.migfx_elements_overcaption_overlay').stop().animate({opacity: 0}, 600)
		}
		
	)

/*=============================== Social Icons  ================================*/
	/*Style one*/
	jQuery('.migfx_elements_socialicon.one').hover(
	
		function(){
			jQuery(this).stop().animate({top: '-6px'}, 200)
		},
		
		function(){
			jQuery(this).stop().animate({top: '0px'}, 200)
		}
		
	)
	
	/*Style two*/
	jQuery('.migfx_elements_socialicon.two').hover(
	
		function(){
			jQuery(this).stop().animate({opacity: '0.7'}, 200)
		},
		
		function(){
			jQuery(this).stop().animate({opacity: '1'}, 200)
		}
		
	)
	
/*=============================== floating ================================*/
	jQuery('.migfx_elements_floating_caption').css({display: 'none', opacity: 0});
	
	jQuery('.migfx_elements_floating_wrapper').hover(
		function(){
			jQuery(this).find('.migfx_elements_floating_caption').css({display: 'block'}).stop().animate({opacity:0.7},500)
		},
		
		function(){
			jQuery(this).find('.migfx_elements_floating_caption').stop().animate({opacity: 0}, 500).hide(0)
		}
	
	);
	

/*=============================== widget ================================*/
	jQuery('.migfx_elements_widget_button').toggle(
		
		function(event){event.preventDefault();
		jQuery('.migfx_elements_widget_button').css({position: 'static'})
		jQuery('.migfx_elements_widget_main').slideToggle(300);
		
		},
		function() {
		jQuery('.migfx_elements_widget_main').slideToggle(300, function(){jQuery('.migfx_elements_widget_button').css({position: 'fixed'})});
		
		}
	
	);
	

	var widgeth4color = jQuery('.migfx_elements_widget_main').attr('data-color');
	var widgetlinkcolor = jQuery('.migfx_elements_widget_main').attr('data-linkcolor');
	jQuery('.migfx_elements_widget_main h4').css({color: widgeth4color})
	jQuery('.migfx_elements_widget_main a').css({color: widgetlinkcolor, textDecoration: 'none'})
	


/*=============================== Icon Menu ================================*/
		
jQuery('.migfx_elements_iconbutton').hover(
	function(){
		jQuery(this).stop().animate({backgroundColor: 'rgba(0,0,0,0.3)'})
	},
	
	function(){
		jQuery(this).stop().animate({backgroundColor: 'rgba(0,0,0,0)'})
	}
)



var browserinfo = jQuery.browser.version
		if(browserinfo == 7.0) {
		jQuery('body').addClass('ie7')
		}	
/*=============================== Spoiler ================================
	
	jQuery('.migfx_elements_spoiler .migfx_elements_spoiler_title').click(function() {

		var // Spoiler elements
		spoiler = jQuery(this).parent('.migfx_elements_spoiler').filter(':first'),
		title = spoiler.children('.migfx_elements_spoiler_title'),
		content = spoiler.children('.migfx_elements_spoiler_content'),
		isAccordion = ( spoiler.parent('.migfx_elements__accordion').length > 0 ) ? true : false;

		if ( spoiler.hasClass('migfx_elements_spoiler_open') ) {
			if ( !isAccordion ) {
				content.hide(200);
				spoiler.removeClass('migfx_elements_spoiler_open');
			}
		}
		else {
			spoiler.parent('.migfx_elements_accordion').children('.migfx_elements_spoiler').removeClass('migfx_elements_spoiler_open');
			spoiler.parent('.migfx_elements_accordion').find('.migfx_elements_spoiler_content').hide(200);
			content.show(100);
			spoiler.addClass('migfx_elements_spoiler_open');
		}
	});
	
*/	
/*===============================Pretty Photo===========================*/


}); /*============End of document ================*/