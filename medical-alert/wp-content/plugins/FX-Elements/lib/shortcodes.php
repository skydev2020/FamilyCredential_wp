<?php

			/*===================
			ICON BOX
			=====================
			*/
	 

function migfx_elements_fx_iconbox_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'title' => '',
				'subtitle' => '',
				'icon' => '',
				'size' => '',
				'url' => '',
				'text' => '',
				'linkwindow' => '',
				'last' => '',
				'buttoncolor' => '',
				'buttoncolorhover' => '',
				'background' => '',
				'backgroundhover' => '',
				'customicon' => '',
				'useicon' => '',
				), $atts ) ); 
				
		$output .= '<div class="migfx_elements_iconbox_wrapper '.$size.' '.$last.'" style="background-color:'.$background.';" data-background="'.$background.'" data-backgroundhover="'.$backgroundhover.'"><div class="migfx_elements_iconbox_title"><h3>'.$title.'</h3></div><div class="migfx_elements_iconbox_subtitle">'.$subtitle.'</div>';
		
		if($useicon == 'yes') {
			if($customicon != null && $customicon != '') {
			$output .= '<div class="migfx_elements_iconbox_icon"><img src="'.$customicon.'" alt="'.$icon.'"/></div>';
			}
		
			else {
			$output .= '<div class="migfx_elements_iconbox_icon"><img src="'.plugins_url('', dirname(__FILE__)).'/images/icons/64-'.$icon.'.png'.'" alt="'.$icon.'"/></div>';
			}
		}
		
		$output .= '<div class="migfx_elements_iconbox_content">'.do_shortcode($content).'</div>';
		
		if($text != null && $text != '') {
		$output .= '<div class="migfx_elements_iconbox_button" style="background-color:'.$buttoncolor.';" data-button="'.$buttoncolor.'" data-buttonhover="'.$buttoncolorhover.'"><a target="_'.$linkwindow.'" href="'.$url.'">'.$text.'</a></div>';
		}
		
		$output .= '</div>';
		
		return $output;

}


			/*===================
			TOP MESSAGE
			=====================
			*/

function migfx_elements_fx_topmessage_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'title' => '',
				'background' => '',
				
				), $atts ) ); 
				
		$output .= '<div class="migfx_elements_topmessage_wrapper" style="background-color:'.$background.';"><div class="migfx_elements_topmessage_content"><h3>'.$title.'</h3>'.do_shortcode($content).'<div class="migfx_elements_topmessage_close">x</div></div></div>';
		
		return $output;

}


			/*===================
			SCROLL TO TOP
			=====================
			*/

function migfx_elements_fx_scroll_to_top_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'horizontal' => '',
				'vertical' => '',
				'text' => '',
				'background' => '',
			), $atts ) ); 
				
		$output .= '<div class="migfx_elements_backtotop '.$horizontal.' '.$vertical.'"><div class="migfx_elements_backtotop_content" style="background-color:'.$background.';">'.$text.'</div></div>';
		
		return $output;

}


			/*===================
			SIMPLE BOX
			=====================
			*/

function migfx_elements_fx_simplebox_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'textcolor' => '',
				'background' => '',
				'backgroundhover' => '',
				'size' => '',
				'last' => '',
			), $atts ) ); 
				
		$output .= '<div class="migfx_elements_simplebox_wrapper '.$size.' '.$last.'" style="color:'.$textcolor.'; background-color:'.$background.';" data-background="'.$background.'" data-backgroundhover="'.$backgroundhover.'">'.do_shortcode($content).'</div>';
		
		return $output;

}


			/*===================
			BUTTON
			=====================
			*/

function migfx_elements_fx_button_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'text' => '',
				'textcolor' => '',
				'background' => '',
				'backgroundhover' => '',
				'size' => '',
				'border' => '',
				'link' => '',
				'target' => '',
			), $atts ) ); 
				
		$output .= '<a target="'.$target.'" class="migfx_elements_button '.$size.'" data-background="'.$background.'" data-backgroundhover="'.$backgroundhover.'" href="'.$link.'" style="color:'.$textcolor.'; background-color:'.$background.'; border-radius:'.$border.'px;">'.$text.'</a>';
		
		return $output;

}

			/*===================
			FLOATING
			=====================
			*/

function migfx_elements_fx_floating_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'background' => '',
				'caption' => '',
				'textcolor' => '',
				'size' => '',
				'last' => '',
			), $atts ) ); 
				
		$output .= '<div class="migfx_elements_floating_wrapper '.$size.' '.$last.' ">'.do_shortcode($content).'<div class="migfx_elements_floating_caption" style="background-color:'.$background.'; color:'.$textcolor.';" data-background="'.$background.'" data-textcolor="'.$textcolor.'">'.$caption.'</div></div>';
		
		return $output;

}


			/*===================
			ICON
			=====================
			*/
			
			
function migfx_elements_fx_icon_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'background' => '',
				'icon' => '',
				'link' => '',
				'size' => '',
				'customicon' => ''
			), $atts ) ); 
				
		$output .= '<a class="migfx_elements_icon_wrapper '.$size.'" style="background-color:'.$background.';" href="'.$link.'">';
		
		if($customicon != null && $customicon != '') {
		$output .= '<img src="'.$customicon.'">';
		}
		
		else {
		$output .= '<img src="'.plugins_url('', dirname(__FILE__)).'/images/icons/64-'.$icon.'.png" alt="'.$icon.'">';
		}

		$output .= '</a>';
		
		return $output;

}
		
			/*===================
			WIDGET
			=====================
			*/

function migfx_elements_fx_widget_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'background' => '',
				'textcolor' => '',
				'linkcolor' => '',
				'title' => '',
			), $atts ) ); 
			
				ob_start();
    			dynamic_sidebar('migfx_elements_sidebar_one');
				dynamic_sidebar('migfx_elements_sidebar_two');
				dynamic_sidebar('migfx_elements_sidebar_three');
				dynamic_sidebar('migfx_elements_sidebar_four');
				$output .='<div class="migfx_elements_widget_wrapper"><div class="migfx_elements_widget_button_wrapper clearfix" ><a href="#" class="migfx_elements_widget_button" style="background-color:'.$background.'; color:'.$textcolor.';">'.$title.'</a></div><div class="migfx_elements_widget_main clearfix" data-color="'.$textcolor.'" data-linkcolor="'.$linkcolor.'" style="background-color:'.$background.'; color:'.$textcolor.';">';
   				$output .= ob_get_contents();
				$output .='</div></div>';
   				ob_end_clean();

		return $output;

}


			/*===================
			EMPTY SPACE
			=====================
			*/
			
			
function migfx_elements_fx_emptyspace_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'background' => '',
				'textcolor' => '',
				'title' => '',
			), $atts ) ); 
			
			$output .= '<br/>';
			
		return $output;

}

			/*===================
			COLORED LINK
			=====================
			*/
			
			
function migfx_elements_fx_coloredlink_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'color' => '',
				'hovercolor' => '',
				'url' => '',
				'text' => '',
				'size' => '',
			), $atts ) ); 
			
			$output .= '<a class="migfx_elements_coloredlink '.$size.'" href="'.$url.'" style="color:'.$color.';" data-colornormal="'.$color.'" data-colorhover="'.$hovercolor.'">'.$text.'</a>';
			
		return $output;

}



			/*===================
			SOCIAL ICONS
			=====================
			*/
			
			
function migfx_elements_fx_socialicon_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'url' => '',
				'icon' => '',
				'effect' => '',
				'target' => '',
				'customicon' => ''
			), $atts ) ); 
			
			$output .= '<a target="'.$target.'" class="migfx_elements_socialicon '.$effect.'" href="'.$url.'" title="'.$icon.'">';
			
			if($customicon != null && $customicon != '') {
			$output .= '<img src="'.$customicon.'"/>';
			}
			
			else {
			$output .= '<img src="'.plugins_url('', dirname(__FILE__)).'/images/socialicons/'.$icon.'_32.png" alt="'.$icon.'"/>';
			}
			
			$output .= '</a>';
			
		return $output;

}

			/*===================
			OVERCAPTION
			=====================
			*/
			
			
function migfx_elements_fx_overcaption_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'url' => '',
				'buttontext' => '',
				'caption' => '',
				'background' => '',
				'size' => '',
				'last' => '',
			), $atts ) ); 
			
			$output .= '<div class="migfx_elements_overcaption_wrapper '.$size.' '.$last.'"><div class="migfx_elements_overcaption_main">'.do_shortcode($content).'</div><div class="migfx_elements_overcaption_overlay" style="background-color:'.$background.';">'.$caption.'<div class="migfx_elements_overcaption_button"><a href="'.$url.'">'.$buttontext.'</a></div></div></div>';
			
		return $output;

}



			/*===================
			DIVIDER
			=====================
			*/
			
			
function migfx_elements_fx_divider_shortcode($atts, $content){


	extract( shortcode_atts( array(
				'color' => '',
			), $atts ) ); 
			
			$output .= '<div class="migfx_elements_divider" style="border-top:1px solid '.$color.'; border-bottom:1px solid #ffffff;"></div>';
			
		return $output;

}



			/*===================
			SPOILER
			=====================
			*/
			/*

function migfx_elements_fx_spoiler_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
				'title' => '',
				'open' => false,
				'style' => ''
				), $atts ) );

		$open_class = ( $open ) ? ' migfx_elements_spoiler_open' : '';
		$open_display = ( $open ) ? ' style="display:block"' : '';

		return '<div class="migfx_elements_spoiler migfx_elements_spoiler_style-' . $style . $open_class . '"><div class="migfx_elements_spoiler_title">' . $title . '</div><div class="migfx_elements_spoiler_content"' . $open_display . '>' . do_shortcode( $content, 's' ) . '</div></div>';
}
*/	
	
			/*===================
			ICON MENU
			=====================
			*/

function migfx_elements_fx_iconmenu_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
				'title' => '',
				'color' => '',
				'size' => '',
				'side' => '',
				'linkone' => '',
				'iconone' => '',
				'customiconone' => '',
				'linktwo' => '',
				'icontwo' => '',
				'customicontwo' => '',
				'linkthree' => '',
				'iconthree' => '',
				'customiconthree' => '',
				'linkfour' => '',
				'iconfour' => '',
				'customiconfour' => '',
				'linkfive' => '',
				'iconfive' => '',
				'customiconfive' => '',
				'linksix' => '',
				'iconsix' => '',
				'customiconsix' => '',
				'linkseven' => '',
				'iconseven' => '',
				'customiconseven' => '',

				), $atts ) );

		$output .= '<div class="migfx_elements_iconmenu_wrapper '.$size.' '.$side.'" style="background-color:'.$color.';">';
		$output .= '<div class="migfx_elements_iconmenu_title">'.$title.'</div>';
		$output .= '<div class="migfx_elements_iconbutton first"></div>';
		if($linkone != null && $linkone != ''){	
		$output .= '<a class="migfx_elements_iconbutton" href="'.$linkone.'">';
		
		if($customiconone != null && $customiconone != ''){
		$output .= '<img src="'.$customiconone.'" alt="view"/>';
		}
		else {
		$output .= '<img src="'.plugins_url('', dirname(__FILE__)).'/images/icons/64-'.$iconone.'.png'.'" alt="'.$iconone.'"/>';
		}
		
		$output .= '</a>';	
		}
 		
		if($linktwo != null && $linktwo != ''){	
		$output .= '<a class="migfx_elements_iconbutton" href="'.$linktwo.'">';
		
		if($customicontwo != null && $customicontwo != ''){
		$output .= '<img src="'.$customicontwo.'" alt="view"/>';
		}
		else {
		$output .= '<img src="'.plugins_url('', dirname(__FILE__)).'/images/icons/64-'.$icontwo.'.png'.'" alt="'.$icontwo.'"/>';
		}
		
		$output .= '</a>';	
		}
		
		if($linkthree != null && $linkthree != ''){	
		$output .= '<a class="migfx_elements_iconbutton" href="'.$linkthree.'">';
		
		if($customiconthree != null && $customiconthree != ''){
		$output .= '<img src="'.$customiconthree.'" alt="view"/>';
		}
		else {
		$output .= '<img src="'.plugins_url('', dirname(__FILE__)).'/images/icons/64-'.$iconthree.'.png'.'" alt="'.$iconthree.'"/>';
		}
		
		$output .= '</a>';	
		}
 		
		
		if($linkfour != null && $linkfour != ''){	
		$output .= '<a class="migfx_elements_iconbutton" href="'.$linkfour.'">';
		
		if($customiconfour != null && $customiconfour != ''){
		$output .= '<img src="'.$customiconfour.'" alt="view"/>';
		}
		else {
		$output .= '<img src="'.plugins_url('', dirname(__FILE__)).'/images/icons/64-'.$iconfour.'.png'.'" alt="'.$iconfour.'"/>';
		}
		
		$output .= '</a>';	
		}
 
 		if($linkfive != null && $linkfive != ''){	
		$output .= '<a class="migfx_elements_iconbutton" href="'.$linkfive.'">';
		
		if($customiconfive != null && $customiconfive != ''){
		$output .= '<img src="'.$customiconfive.'" alt="view"/>';
		}
		else {
		$output .= '<img src="'.plugins_url('', dirname(__FILE__)).'/images/icons/64-'.$iconfive.'.png'.'" alt="'.$iconfive.'"/>';
		}
		
		$output .= '</a>';	
		}
 		
		
		if($linksix != null && $linksix != ''){	
		$output .= '<a class="migfx_elements_iconbutton" href="'.$linksix.'">';
		
		if($customiconsix != null && $customiconsix != ''){
		$output .= '<img src="'.$customiconsix.'" alt="view"/>';
		}
		else {
		$output .= '<img src="'.plugins_url('', dirname(__FILE__)).'/images/icons/64-'.$iconsix.'.png'.'" alt="'.$iconsix.'"/>';
		}
		
		$output .= '</a>';	
		}
		
		if($linkseven != null && $linkseven != ''){	
		$output .= '<a class="migfx_elements_iconbutton" href="'.$linkseven.'">';
		
		if($customiconseven != null && $customiconseven != ''){
		$output .= '<img src="'.$customiconseven.'" alt="view"/>';
		}
		else {
		$output .= '<img src="'.plugins_url('', dirname(__FILE__)).'/images/icons/64-'.$iconseven.'.png'.'" alt="'.$iconseven.'"/>';
		}
		
		$output .= '</a>';	
		}
 
 
 		
		$output .= '<div class="migfx_elements_iconbutton last"></div>';
		$output .= '</div>';
		
		return $output;
}

