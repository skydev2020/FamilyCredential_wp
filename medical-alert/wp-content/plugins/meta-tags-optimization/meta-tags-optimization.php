<?php 
/*
Plugin Name: Meta Tags Optimization
Description: Check Meta Title, Meta Keywords(s) and Meta Description on posts and pages and consult with a seo expert.
Author: flippercode
Version: 1.5.0
Author URI: http://www.flippercode.com
*/
function checkTitle($titleText="",$keywordsData="")
	{
		$titleText=strtolower($titleText);
		$keywordsData=strtolower($keywordsData);
		$titleLength=strlen($titleText);
		
		if($titleLength==0)
		{
		$result="Title is misssing.";
		$return['type']='error';
		$return['message']=$result;
		return $return;
		}
		$keywordPosition=0;
		$isKeywordExist=false;
		$countEachValue=array(0=>"1",1=>"1",2=>"1");
			// total # of seperator
			$seperator["bar"]["total"]=substr_count($titleText,"|");
			$seperator["dash"]["total"]=substr_count($titleText,"-");
			$seperator["colon"]["total"]=substr_count($titleText,":");
			$seperator["greater"]["total"]=substr_count($titleText,">");
			
			// last occurance of each seperator
			$lastIndex=0;
			$sep='=';
			$seperator["bar"]["last"]=strrpos($titleText,"|");
			if($seperator["bar"]["last"]>$lastIndex)
			{
			$lastIndex=$seperator["bar"]["last"];
			$sep='|';
			}
			$seperator["dash"]["last"]=strrpos($titleText,"-");
			
			if($seperator["dash"]["last"]>$lastIndex)
			{
			$lastIndex=$seperator["dash"]["last"];
			$sep='-';
			}
			$seperator["colon"]["last"]=strrpos($titleText,":");
			
			if($seperator["colon"]["last"]>$lastIndex)
			{
			$lastIndex=$seperator["colon"]["last"];
			$sep=':';
			}
			$seperator["greater"]["last"]=strrpos($titleText,">");
			
			if($seperator["greater"]["last"]>$lastIndex)
			{
			$lastIndex=$seperator["greater"]["last"];
			$sep='>';
			}
		
	
	   		$splitTitle=explode($sep,trim($titleText));
			
			$splitKeyword=explode(",",trim(strtolower($keywordsData)));
		
		   if($seperator["bar"]["total"]>0 and $sep!='|')
		   {
				$splitTitle[0]=explode("|",$splitTitle[0]);
		   }
			if($seperator["dash"]["total"]>0 and $sep!='-')
		   {
				$splitTitle[0]=explode("-",$splitTitle[0]);
		   }
			if($seperator["greater"]["total"]>0 and $sep!='>')
		   {
				$splitTitle[0]=explode(">",$splitTitle[0]);
		   }
		   
		   if($seperator["colon"]["total"]>0 and $sep!=':')
		   {
				$splitTitle[0]=explode(":",$splitTitle[0]);
		   }
			
		
			$left=count($splitTitle[0])."<br><br>";
			$right=count($splitTitle[1]);	
				
			$keywordLeftSide=false;
			$keywordRightSide=false;
			$unableToPredict=false;
			if($left>1 and $right==1)
			{
				$isKeywordExist=false;
				$keywordLeftSide=false;
				//use this to check repeated keywords
				$countEachValue=array_count_values($splitTitle[0]);
				
				$leftPositionArray=array();
				foreach($countEachValue as $name=>$position){
					$leftPositionArray[]=$name;
					if(in_array(trim($name),$splitKeyword))
					{
						$isKeywordExist=true;
						$keywordLeftSide=true;
					}
					
				} // End Foreach
				
				// check if keyword is not exists in lefy spilt title,then check it in right
				if($keywordLeftSide==false){
					if(in_array(trim($splitTitle[1]),$splitKeyword)){
						$isKeywordExist=true;
						$keywordRightSide=true;
					}
					else{
						$isKeywordExist=false;
						$unableToPredict=true;
					}
				}
				
			
			}
			if($left==1 and $right>1)
			{
				$isKeywordExist=false;
				$keywordRightSide=false;
				//use this to check repeated keywords
				$countEachValue=array_count_values($splitTitle[1]);
				$rightPositionArray=array();
				foreach($countEachValue as $name=>$position){
					$leftPositionArray[]=$name;
					if(in_array(trim($name),$splitKeyword))
					{
						$isKeywordExist=true;
						$keywordRightSide=true;
					}
					
				} // End Foreach
				
				// check if keyword is not exists in right spilt title,then check it in left
				if($keywordRightSide==false){
					if(in_array(trim($splitTitle[0]),$splitKeyword)){
						$isKeywordExist=true;
						$keywordLeftSide=true;
					}
					else{
						$isKeywordExist=false;
						$unableToPredict=true;
					}
				}
			}
			
			if($left==1 and $right==1)
			{
				//use this to check repeated keywords
				
				if(in_array(trim($splitTitle[0]),$splitKeyword)){
				$isKeywordExist=true;
				$keywordLeftSide=true;
				}
				else if(in_array(trim($splitTitle[1]),$splitKeyword)){
				$isKeywordExist=true;
				$keywordRightSide=true;
				}
				else{
				$isKeywordExist=false;
				$unableToPredict=true;
				}
											
			}
			
			$type='error';
			//Now check all condition one by one
			
			//If the title is <69 and the keyword is located first in order, then the text "Title Text 1" shows.
			if($titleLength<=69 and $keywordLeftSide==true and $keywordsData!='')
			{
				$type='success';

				$result="Done! You're done.";
			}
			
			
			//If the title is <69 and the keyword is located but NOT as the first word in order, then the text Title Text 2" shows. And you receive a score of -
			
			elseif($titleLength<69 and $keywordRightSide==true  and $keywordsData!='')
			{
				$type='success';
				$result="Done! You're done.";
			}
			
			// If the title is <69 and the keyword is NOT located at all, then the text "Title Text 3" shows. And you receive a score of –
			elseif($titleLength<69 and $isKeywordExist==false)
			{
				$result="The title is <69 characters and the keyword is NOT located at all";
			}
		
			//If the title is <69 and the keyword is located more than 1 time in the title , then the text "Title Text 4" shows. And you receive a score of  –
			elseif($titleLength<69 and array_filter($countEachValue,"multipleEntries"))
			{
				$result="The title is <69 characters and the keyword is located more than 1 time in the title";
			}
		
			//If the title is >69 and the keyword is located first in order, then the text "Title Text 5" shows.
			elseif($titleLength>69 and $keywordLeftSide==true)
			{
				$result="The title is >69 characters and the keyword is located first in order";
			}
			
			//If the title is >69 and the keyword is located but NOT as the first word in order, then the text "Title Text 6" shows. And you receive a score of -
			
			elseif($titleLength>69 and $keywordRightSide==true)
			{
				$result="The title is >69 characters and the keyword is located but NOT as the first word in order";
			}
			
			// If the title is >69 and the keyword is NOT located at all, then the text "Title Text 7" shows. And you receive a score of –
			elseif($titleLength>69 and $isKeywordExist==false)
			{
				$result="The title is >69 characters and the keyword is NOT located at all";
			}
		
			//If the title is >69 and the keyword is located more than 1 time in the title , then the text "Title Text 8" shows. And you receive a score of  –
				elseif($titleLength>69 and count($countEachValue)>0 and array_filter($countEachValue,"multipleEntries"))
				{
					$result="The title is >69 characters and the keyword is located more than 1 time in the title";
				}
			
			// If a title is NOT located at all, then the text "Title Text 9" shows. And you receive a score of  –	
				elseif($right==0 and $splitTitle[0]=='')
				{
					$result=" Title is missing";
				}
				elseif($keywordsData=='')
				{
					
						$result="Title doesn't have any keyword.";
				}	
		
		
             $return['type']=$type;
             $return['message']=$result;		
		     return $return;
	}	
	
function checkKeyword($keywords,$searchKeywords)
	{
	$type='error';
	if($keywords=='')
		{
			$result="Keyword(s) is misssing.";	
		  $return['type']=$type;
   $return['message']=$result;
	
	return $return;
  
		
		}
   $searchkeywords=trim($searchKeywords);
   if($searchkeywords)
   $findKeywords=explode(',',$searchKeywords);
   if(trim($keywords))
   {
   $allKeywords=explode(',',$keywords);
   $totalKeywords=count($allKeywords);
   }
   else
   $totalKeywords=0;
   
   $singleKeywords=true;
   $keywordsfound=false;
   // search Keywords in mentioned keywords
   if(trim($keywords))
   $keywordsStatus=array_count_values($allKeywords);
   if($searchkeywords && $keywordsStatus)
   {
   foreach($keywordsStatus as $key=>$value)
   {
    if(in_array(trim($key),$findKeywords))
    {
     $keywordsfound=true;
     if($value>1)
      $singleKeywords=false;
    }
   }
   }
   
   // check multiple entries in keywords
   $multipleKeywords=false;
   if(count($keywordsStatus))
   {
   foreach($keywordsStatus as $key=>$value)
   {
     if($value>1)
     {
      $multipleKeywords=true;
     }
   }
   }
   
//   If you find 1-5 meta keywords, and the keyword you search for is in there once, then show text "Meta Keyword 1".

   if($totalKeywords>=1 and $totalKeywords<=5 and $singleKeywords==true and $keywordsfound==true)
   {
					$type='success';

	$result="Done! You're done.";
   }
//          If you find 1-5 meta keywords, and the keyword you search for is there MORE then once, then show text "Meta Keyword 2".  And you receive a core of –
   
  if($totalKeywords>=1 and $totalKeywords<=5 and $singleKeywords==false)
   {
	$result="The keyword is < 5 and located Multiple Times";
   }

//          If you find 1-5 meta keywords, and the keyword you search for is NOT there at all, then show text "Meta Keyword 3".  And you receive a core of –

  if($totalKeywords>=1 and $totalKeywords<=5 and $keywordsfound==false and $searchkeywords!='')
   {
	$result="The keyword is < 5 and the keyword is NOT located at all";
   }
   
//          If you find >5 meta keywords, and the keyword you search for is there once, then show text "Meta Keyword 4".  And you receive a core of –
   
   if($totalKeywords>5 and $singleKeywords==true and $keywordsfound==true)
   {
	$result="The keyword is > 5 and located only once";
	
   }

//          If you find >5 meta keywords, and the keyword you search for is there MORE then once, then show text "Meta Keyword 5".  And you receive a core of –

   if($totalKeywords>5 and $singleKeywords==false)
   {
	$result="The keyword is > 5 and located Multiple Times";
   }
   
//          If you find >5 meta keywords, and the keyword you search for is NOT there at all, then show text "Meta Keyword 6".  And you receive a core of –

   if($totalKeywords>5 and $keywordsfound==false and $searchkeywords!='')
   {
	$result="The keyword is > 5 and the keyword is NOT located at all";
   }
   
//    If you find NO meta keywords at all, then show text "Meta keyword 7". And you receive a core of –
   
   if($totalKeywords==0)
   {
	$result="Keyword is missing";
   }
   
   if($totalKeywords>5 and $searchkeywords=='')
   {
	$result="the keyword is > 5 ";
	
   }
   if($totalKeywords>=1 and $totalKeywords<=5 and $searchkeywords=='' and $multipleKeywords==true)
   {
		$type='success';
		$result="Done! You're done.";
   }
   
   if($totalKeywords>=1 and $totalKeywords<=5 and $searchkeywords=='' and $multipleKeywords==false)
   {
	$result="the keyword is < 5 and Keyword Located Multiple times";
   }
   
$return['type']=$type;
   $return['message']=$result;		
		return $return;
		
 } // End function
	
function metaDescription($allKeywordsData,$metaDescription)
	{
			$type='error';
		
		  $desLength=strlen($metaDescription);
		  
		  if($desLength==0)
				{
					$result="Description is misssing.";	
				  $return['type']=$type;
		   $return['message']=$result;
			
			return $return;
		  
				}
		  $keywordAtStarting=false;
		  $keywordInDes=false;
		  $allKeywords=explode(",",$allKeywordsData);
		  for($i=0;$i<count($allKeywords);$i++)
		  {
		 
		   if((strripos(ltrim($metaDescription),trim($allKeywords[$i])))===0)
			 {
			  $keywordAtStarting=true;
			 }
		  }
		  
		  for($i=0;$i<count($allKeywords);$i++)
		  {
		
		   if((strripos(ltrim($metaDescription),trim($allKeywords[$i])))!==false)
			 {
			  $keywordInDes=true;
			 }
		  }
		  // now apply condition 
		  
		//    If you find NO description at all. Then show text "Meta desc Text 1". And you receive a core of –
		  if($desLength==0)
		  {
		   $result="Description is misssing.";
			$return['type']=$type;
		   $return['message']=$result;
			
			return $return;
		  
		  }
		 
		//   If you find that description is between 120-156 characters, and the keyword is the first word in the description. Then show text "Meta desc Text 2".
		
		  if($desLength>=120 and $desLength<=156 and $keywordAtStarting==true)
		  {
			$type='success';
			$result="Done! You're done.";
		  }
		//          If you find that description is between 120-156 characters, and the keyword is NOT the first word in the description. Then show text "Meta desc Text 3". And you receive a core of –
		  if($desLength>=120 and $desLength<=156 and $keywordAtStarting==false and $keywordInDes==true)
		  {
			  $type='success';
		  $result="Done! You're done.";
		  }
		
		//         If you find that description is between 120-156 characters, and the keyword is NOT in the description at ALL. Then show text "Meta desc Text 4". And you receive a core of –
		  if($desLength>=120 and $desLength<=156 and $keywordInDes==false)
		  {
		 
		   $result="description is between 120-156 characters and the keyword is NOT in the description at ALL";
		  }
		
		 //         If you find that description is >156 characters, and the keyword is the first word in the description. Then show text "Meta desc Text 5". And you receive a core of –
		  if($desLength>156 and $keywordAtStarting==true)
		  {
		   $result="description is > 156 characters and keyword is the first word in the description";
		  }
		
		//        If you find that description is >156 characters, and the keyword is NOT the first word in the description. Then show text "Meta desc Text 6". And you receive a core of –
		  if($desLength>156 and $keywordAtStarting==false and $keywordInDes==true)
		  {
		   $result="description is > 156 characters and the keyword is NOT the first word in the description";
		  }
		
		//         If you find that description is >156 characters, and the keyword is NOT in the description at ALL. Then show text "Meta desc Text 7". And you receive a core of –
		  if($desLength>156 and $keywordInDes==false)
		  {
		   $result="description is > 156 characters and the keyword is NOT in the description at ALL";
		  }
		
		//         If you find that description is <120 characters, and the keyword is the first word in the description. Then show text "Meta desc Text 8". And you receive a core of -
		  if($desLength<120 and $keywordAtStarting==true)
		  {
		   $type="success";
		   $result="description is < 120 characters and the keyword is the first word in the description";
		  }
		
		//         If you find that description is <120 characters, and the keyword is NOT the first word in the description. Then show text "Meta desc Text 9". And you receive a core of –
		  if($desLength<120 and $keywordAtStarting==false and $keywordInDes==true)
		  {
		  $result="description is < 120 characters and the keyword is NOT the first word in the description";
		  }
		
		//         If you find that description is <120 characters, and the keyword is NOT in the description at ALL. Then show text "Meta desc Text 10". And you receive a core of –
		  if($desLength<120  and $keywordInDes==false)
		  {
		   $result="description is < 120 characters and the keyword is NOT in the description at ALL";
		  }
		  
		  //End Condition
		  $return['type']=$type;
		   $return['message']=$result;
				
				return $return;
				
		 } // End Function


// put this function out side this class
function multipleEntries($v)
	{
		if ($v==1)
  		{	
  			return false;
  		}
		else{
			return true;
		}
	}
add_action( 'add_meta_boxes', 'mto_seo_add_custom_box' );

/* Adds a box to the main column on the Post and Page edit screens */
function mto_seo_add_custom_box() {
	
	$post_types=get_post_types('','names');
	foreach ($post_types as $post_type ) {
		add_meta_box( 'mto_seo_sectionid', 'Meta Tags Optimization','mto_seo_inner_custom_box', $post_type);
	}


}
/* Prints the box content for Posts */
function mto_seo_inner_custom_box( $post ) {

// get post's meta title


$post_meta_rs=get_post_meta_all($post->ID);

// get post meta title
$post_meta_title1='';
$post_meta_title2='';
if($post_meta_rs['_aioseop_title']!=''){
	$post_meta_title1=$post_meta_rs['_aioseop_title'];
}
else{
	$post_meta_title1=$post->post_title;
}
// keyword is here
$post_meta_keywords=$post_meta_rs['_aioseop_keywords'];

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	
	if ($site_description){
		$post_meta_title2=" | ".$site_description;
	}
	else{
		$post_meta_title2="";
	}
		
$post_meta_title=$post_meta_title1;

// this is for title
$title_res=checkTitle($post_meta_title,$post_meta_keywords);

//this is for keywords
$keyword_res=checkKeyword($post_meta_keywords,$post_meta_keywords);

//this is for descriptions
$post_meta_desc=$post_meta_rs['_aioseop_description'];
$desc_res=metaDescription($post_meta_keywords,$post_meta_desc);


  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );

?>
<style>
.info, .success, .warning, .error, .validation {
border: 1px solid;
margin: 10px 0px;
padding:15px 10px 15px 50px;
background-repeat: no-repeat;
background-position: 10px center;
}
.info {
color: #00529B;
background-color: #BDE5F8;
background-image: url('<?php echo home_url() . '/wp-content/plugins/meta-tags-optimization/'?>info.png');
}
.success {
color: #4F8A10;
background-color: #DFF2BF;
background-image:url('<?php echo home_url() . '/wp-content/plugins/meta-tags-optimization/'?>success.png');
}
.warning {
color: #9F6000;
background-color: #FEEFB3;
background-image: url('<?php echo home_url() . '/wp-content/plugins/meta-tags-optimization/'?>warning.png');
}
.error {
color: #D8000C;
background-color: #FFBABA;
background-image: url('<?php echo home_url() . '/wp-content/plugins/meta-tags-optimization/'?>error.png');
}
.data_info
{
	font-weight:bold;
	}
	
.value_info
{
	font-style:italic;
	}	
</style>
<?
	
  // The actual fields for data entry
  echo '<table><tr><td><label for="myplugin_new_field" class="data_info">';
       _e("Post Title : ", 'myplugin_textdomain' );
  
  echo '</label><label class="value_info">'.$post_meta_title.'</label></td></tr>';
  
  echo '<tr><td> <fieldset class="'.$title_res['type'].'">'.$title_res['message'].'</fieldset></td></tr>';

  echo '<tr><td><label for="myplugin_new_keyword_field" class="data_info">';
       _e("Post Keyword(s) : ", 'myplugin_textdomain' );
  
  echo '</label><label class="value_info">'.$post_meta_keywords.'</label> </td></tr>';
  
  echo '<tr><td><fieldset class="'.$keyword_res['type'].'">'.$keyword_res['message'].'</fieldset></td><br></tr>';
  
  echo '<tr><td><label for="myplugin_new_desc_field" class="data_info">';
       _e("Post Description : ", 'myplugin_textdomain' );
  echo '</label><label class="value_info">'.$post_meta_desc.'</label></td></tr> ';
  
  echo '<tr><td><fieldset class="'.$desc_res['type'].'">'.$desc_res['message'].'</fieldset></td></tr>';

  echo '<tr><td><fieldset class="info">To Discuss with SEO Consultant and Optimize your Meta Tags, Go with <a target="_blank" href="http://codecanyon.net/item/meta-tags-optimization/4915633">Pro Version</a></fieldset></td></tr></table>';
  

} // End functio mto_seo_inner_custom_box


// function for getting all custome meta tags using seo one plugin
function get_post_meta_all($post_id){
	    global $wpdb;
	    $data   =   array();
	
	    $wpdb->query("SELECT * FROM ".$wpdb->postmeta." WHERE post_id=".$post_id);
	    foreach($wpdb->last_result as $k => $v){
	        $data[$v->meta_key] =   $v->meta_value;
	    };
	    return $data;
	}
	
add_action('admin_menu','mto_admin_menu');


function mto_admin_menu(){

add_menu_page(__('Overview'),__('Meta Tags Optimization'),'manage_options',__file__,'mto_how_to_use');

 add_submenu_page(__FILE__,__('How it works'),__('How it works'),'manage_options','mto_how_to_use','mto_how_to_use');


}	

// Hook things in, late enough so that add_meta_box() is defined

function mto_how_to_use()
{

include_once ( dirname (__FILE__) . '/overview.php' ); 	// mto_admin_overview
mto_admin_overview();

?>	
    
<?php
}


?>
