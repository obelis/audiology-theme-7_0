<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/* 
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

	<script type="text/javascript">
	jQuery(document).ready(function() {
	
		jQuery('#example_showhidden').click(function() {
	  		jQuery('.hidden').fadeToggle(400);
		});
		
		if (jQuery('#example_showhidden:checked').val() !== undefined) {
			jQuery('.hidden').show();
		}
		
	});
	
	jQuery(document).ready(function() {
	
		jQuery('#example_showhidden2').click(function() {
	  		jQuery('.two').fadeToggle(400);
		});
		
		if (jQuery('#example_showhidden2:checked').val() !== undefined) {
			jQuery('.two').show();
		}
		
	});
	jQuery(document).ready(function() {
	
		jQuery('#show_second_office').click(function() {
	  		jQuery('.second-office-hide').fadeToggle(400);
		});
		
		if (jQuery('#show_second_office:checked').val() !== undefined) {
			jQuery('.second-office-hide').show();
		}
		
	});
	jQuery(document).ready(function() {
	
		jQuery('#show_third_office').click(function() {
	  		jQuery('.third-office-hide').fadeToggle(400);
		});
		
		if (jQuery('#show_third_office:checked').val() !== undefined) {
			jQuery('.third-office-hide').show();
		}
		
	});
	jQuery(document).ready(function() {
	
		jQuery('#show_fourth_office').click(function() {
	  		jQuery('.fourth-office-hide').fadeToggle(400);
		});
		
		if (jQuery('#show_fourth_office:checked').val() !== undefined) {
			jQuery('.fourth-office-hide').show();
		}
		
	});
	jQuery(document).ready(function() {
	
		jQuery('#show_fifth_office').click(function() {
	  		jQuery('.fifth-office-hide').fadeToggle(400);
		});
		
		if (jQuery('#show_fifth_office:checked').val() !== undefined) {
			jQuery('.fifth-office-hide').show();
		}
		
	});
	jQuery(document).ready(function() {
	
		jQuery('#show_sixth_office').click(function() {
	  		jQuery('.sixth-office-hide').fadeToggle(400);
		});
		
		if (jQuery('#show_sixth_office:checked').val() !== undefined) {
			jQuery('.sixth-office-hide').show();
		}
		
	});
	jQuery(document).ready(function() {
	
		jQuery('#show_seventh_office').click(function() {
	  		jQuery('.seventh-office-hide').fadeToggle(400);
		});
		
		if (jQuery('#show_seventh_office:checked').val() !== undefined) {
			jQuery('.seventh-office-hide').show();
		}
		
	});
	jQuery(document).ready(function() {
	
		jQuery('#show_first_employee').click(function() {
	  		jQuery('.first_employee_hide').fadeToggle(400);
		});
		
		if (jQuery('#show_first_employee:checked').val() !== undefined) {
			jQuery('.first_employee_hide').show();
		}
		
	});
	jQuery(document).ready(function() {
	
		jQuery('#show_second_employee').click(function() {
	  		jQuery('.second_employee_hide').fadeToggle(400);
		});
		
		if (jQuery('#show_second_employee:checked').val() !== undefined) {
			jQuery('.second_employee_hide').show();
		}
		
	});
	jQuery(document).ready(function() {
	
		jQuery('#show_third_employee').click(function() {
	  		jQuery('.third_employee_hide').fadeToggle(400);
		});
		
		if (jQuery('#show_third_employee:checked').val() !== undefined) {
			jQuery('.third_employee_hide').show();
		}
		
	});
	jQuery(document).ready(function() {
	
		jQuery('#show_fourth_employee').click(function() {
	  		jQuery('.fourth_employee_hide').fadeToggle(400);
		});
		
		if (jQuery('#show_fourth_employee:checked').val() !== undefined) {
			jQuery('.fourth_employee_hide').show();
		}
		
	});
	
	
	jQuery(document).ready(function() {
	
		jQuery('input#audiology_theme_3_0-twitter_radio-two').click(function() {
	  		jQuery('.twitter_hidden').fadeToggle(400);
		});
		
		jQuery('input#audiology_theme_3_0-twitter_radio-one').click(function() {
	  		jQuery('.twitter_hidden').hide();
		});
		
	});
	
	jQuery(document).ready(function() {
	
		jQuery('input#audiology_theme_3_0-facebook_radio-two').click(function() {
	  		jQuery('.facebook_hidden').fadeToggle(400);
		});
		
		jQuery('input#audiology_theme_3_0-facebook_radio-one').click(function() {
	  		jQuery('.facebook_hidden').hide();
		});
		
	});
	jQuery(document).ready(function() {
	
		jQuery('input#audiology_theme_3_0-google_radio-two').click(function() {
	  		jQuery('.google_hidden').fadeToggle(400);
		});
		
		jQuery('input#audiology_theme_3_0-google_radio-one').click(function() {
	  		jQuery('.google_hidden').hide();
		});
		
	});        
	</script>

 
<?php
}
/* 
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 */

if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	
	$optionsframework_settings = get_option('optionsframework');
	
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}
/* 
 * This function adds the html that will appear in the sidebar module of the
 * options panel.  Feel free to alter this how you see fit.
 */

add_action( 'optionsframework_after','optionscheck_display_sidebar' );

function optionscheck_display_sidebar() { ?>
	<div id="optionsframework-sidebar">
		<div class="metabox-holder">
			<div class="postbox">
				<h3>Obelis Media</h3>
					<div class="inside">
						<p>When you are satisfied with your application please file a support ticket here:<br /><a href="http://obelismedia.com/support/">Support Portal</a></p>
					</div>
			</div>
		</div>
	</div>
<?php }

/* 
 * This function loads an additional CSS file for the options panel
 * which allows us to style the sidebar
 */
 
 if ( is_admin() ) {
    $of_page= 'toplevel_page_options-framework';
    add_action( "admin_print_styles-$of_page", 'optionsframework_custom_css', 100);
}
 
function optionsframework_custom_css () {
	wp_register_style( 'optionsframework_custom_css', get_stylesheet_directory_uri() .'/assets/css/options-custom.css' );
	wp_enqueue_style( 'optionsframework_custom_css' );
}



//google maps geocode function
function lookup($string){
 
   $string = str_replace (" ", "+", urlencode($string));
   $details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$string."&sensor=false";
 
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $details_url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $response = json_decode(curl_exec($ch), true);
 
   // If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
   if ($response['status'] != 'OK') {
   // echo $response['status']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
   }
 
   /* print_r($response); */
   $geometry = $response['results'][0]['geometry'];
 
    $longitude = $geometry['location']['lat'];
    $latitude = $geometry['location']['lng'];
 
    $array = array(
        'latitude' => $geometry['location']['lng'],
        'longitude' => $geometry['location']['lat'],
        'location_type' => $geometry['location_type'],
    );
 
    return $array;
 
}

add_action('optionsframework_after_validate', 'geocoder'); // runs geocoder when business profiles is updated

// geocoder gets address data from business profile. 
function geocoder(){
	
	$theme = get_template();
	// var_dump($_POST);
	$theme = str_replace("-","_",$theme);
	
	foreach ($_POST[$theme] as $key => $val) {
	   // echo 'key= '.$key.'<br />';
	   // echo 'val = '.$val.'<br /><br />';
	    if($key == 'street_address'){
		    $main_street = $val;
	    }
	    if($key == 'main_city'){
		    $main_city = $val;
	    }
		if($key == 'main_state'){
		    $main_state = $val;
	    }
	    if($key == 'main_zip'){
		    $main_zip = $val;
	    }
		// Second Address
	    if($key == 'second_street_address'){
		    $second_street = $val;
	    }
	    if($key == 'second_city'){
		    $second_city = $val;
	    }
		if($key == 'second_state'){
		    $second_state = $val;
	    }
	    if($key == 'second_zip'){
		    $second_zip = $val;
	    }
		// Third Address
	    if($key == 'third_street_address'){
		    $third_street = $val;
	    }
	    if($key == 'third_city'){
		    $third_city = $val;
	    }
		if($key == 'third_state'){
		    $third_state = $val;
	    }
	    if($key == 'third_zip'){
		    $third_zip = $val;
	    }
	    // Fourth Address
	    if($key == 'fourth_street_address'){
		    $fourth_street = $val;
	    }
	    if($key == 'fourth_city'){
		    $fourth_city = $val;
	    }
		if($key == 'fourth_state'){
		    $fourth_state = $val;
	    }
	    if($key == 'fourth_zip'){
		    $fourth_zip = $val;
	    }
	}
	
	// geo codes addresses
	$address1 = $main_street.', '.$main_city.' '.$main_state.' '.$main_zip;
	$address2 = $second_street.', '.$second_city.' '.$second_state.' '.$second_zip;
	$address3 = $third_street.', '.$third_city.' '.$third_state.' '.$third_zip;
	$address4 = $fourth_street.', '.$fourth_city.' '.$fourth_state.' '.$fourth_zip;
	
	$array = lookup($address1);
	$lat1 = $array[latitude];
	$lon1 = $array[longitude];
	
	$array = lookup($address2);
	$lat2 = $array[latitude];
	$lon2 = $array[longitude];
	
	$array = lookup($address3);
	$lat3 = $array[latitude];
	$lon3 = $array[longitude];
	
	$array = lookup($address4);
	$lat4 = $array[latitude];
	$lon4 = $array[longitude];


	// writes geocodes to wp options database
	/*
update_option( 'lat1', $lat1 );
	update_option( 'lon1', $lon1 );
	
	update_option( 'lat2', $lat2 );
	update_option( 'lon2', $lon2 );
	
	update_option( 'lat3', $lat3 );
	update_option( 'lon3', $lon3 );
	
	update_option( 'lat4', $lat4 );
	update_option( 'lon4', $lon4 );
	
*/
	

}
/* Shortcodes */

/* map shortcode */
// [map location="1, 2 , 3 or 4"]
function home_mini_map( $atts ){

	$a = shortcode_atts( array(
		'location' => '',
	), $atts );
    
	ob_start();
	include(get_stylesheet_directory()."/inc/location_variables.php");
	$address1 = $main_street.', '.$main_city.' '.$main_state.' '.$main_zip;
	$address2 = ($display_2_location == 1) ? $second_street.', '.$second_city.' '.$second_state.' '.$second_zip : NULL;
	$address3 = ($display_3_location == 1) ? $third_street.', '.$third_city.' '.$third_state.' '.$third_zip : NULL;
	$address4 = ($display_4_location == 1) ? $fourth_street.', '.$fourth_city.' '.$fourth_state.' '.$fourth_zip : NULL;

	$lat1 = get_option( 'lat1' );
	$lon1 = get_option( 'lon1' );

	$lat2 = get_option( 'lat2' );
	$lon2 = get_option( 'lon2' );
	

	$lat3 = get_option( 'lat3' );
	$lon3 = get_option( 'lon3' );
	
	$lat4ck = get_option( 'lat4' );
	$lon4ck = get_option( 'lon4' );

	$lat4 = (isset($lat4ck) && $lat4ck != '' ? $lat4ck : NULL);
	$lon4 = (isset($lon4ck) && $lon4ck != '' ? $lon4ck : NULL);

	
	$bubble1 = '[\'<h4>'.$company_name.'</h4><a href=\"https://www.google.com/maps/dir/Current+Location/'.$lon1.','.$lat1.'\"><span style=\"font-weight:bold;\">'.$main_street.'</span><br />'.$main_city.', '.$main_state.' '.$main_zip.'</a>\','.json_encode($lon1).', '.json_encode($lat1).']';
	$bubble2 = '[\'<h4>'.$company_name.'</h4><a href=\"https://www.google.com/maps/dir/Current+Location/'.$lon2.','.$lat2.'\"><span style=\"font-weight:bold;\">'.$second_street.'</span><br />'.$second_city.', '.$second_state.' '.$second_zip.'</a>\','.json_encode($lon2).', '.json_encode($lat2).']';
	$bubble3 = '[\'<h4>'.$company_name.'</h4><a href=\"https://www.google.com/maps/dir/Current+Location/'.$lon3.','.$lat3.'\"><span style=\"font-weight:bold;\">'.$third_street.'</span><br />'.$third_city.', '.$third_state.' '.$third_zip.'</a>\','.json_encode($lon3).', '.json_encode($lat3).']';
	$bubble4 = '[\'<h4>'.$company_name.'</h4><a href=\"https://www.google.com/maps/dir/Current+Location/'.$lon4.','.$lat4.'\"><span style=\"font-weight:bold;\">'.$fourth_street.'</span><br />'.$fourth_city.', '.$fourth_state.' '.$fourth_zip.'</a>\','.json_encode($lon4).', '.json_encode($lat4).']';
	
	switch ($a['location']) {
	  case "1":
	    $lat = get_option( 'lat1' );
		$lon = get_option( 'lon1' );
		$location_select = $bubble1;
	    break;
	  case "2":
		$lat = get_option( 'lat2' );
		$lon = get_option( 'lon2' );
	    $location_select = $bubble2;
	    break;
	  case "3":
		$lat = get_option( 'lat3' );
		$lon = get_option( 'lon3' );
		$location_select = $bubble3;
	    break;
	  case "4":
		$lat = get_option( 'lat4' );
		$lon = get_option( 'lon4' );
		$location_select = $bubble4;
	    break;
	  default:
	    $location_select = $bubble1;
	    if($display_2_location == 1){ $location_select .= ', '.$bubble2; }
	    if($display_3_location == 1){ $location_select .= ', '.$bubble3; }
	    if($display_4_location == 1){ $location_select .= ', '.$bubble4; }
	    
	    $map_bounds = "show";

	}
	
	
	include(get_stylesheet_directory()."/inc/home_mini_map.php");    
	$result = ob_get_contents();
	ob_end_clean(); 	 
	return $result;
}

add_shortcode('map', 'home_mini_map');





function sc_section_title($atts, $content = null)
{
    extract(shortcode_atts(array(
        "level" => '3'
    ), $atts));

    return '<h'.$level.' class="section-title">'.$content.'</h'.$level.'>';
}

add_shortcode("section-title", "sc_section_title");


function sc_post_list($atts, $content = null)
{
    $result = '<ul class="media-list">';
    extract(shortcode_atts(array(
    ), $atts));

    $thumbnails = get_posts($atts);
    foreach ($thumbnails as $thumbnail) {
        if ( has_post_thumbnail($thumbnail->ID)) {
            $thumb = get_the_post_thumbnail($thumbnail->ID, 'post_list');
        }
        else {
            $thumb = '<img src="' . get_template_directory_uri() . '/img/no_image_80.png" class="img-responsive" alt="No image">';
        }
        $result .= '<li class="media">';
        $result .= '<a href="' . get_permalink( $thumbnail->ID ) . '" title="' . esc_attr( $thumbnail->post_title ) . '" class="pull-left media-object">';
        $result .= $thumb;
        $result .= '</a>';
        $result .= '<div class="media-body">';
        $result .= '<p class="media-heading">';
        $result .= '<a href="' . get_permalink( $thumbnail->ID ) . '" title="' . esc_attr( $thumbnail->post_title ) . '">';
        $result .= get_the_title($thumbnail->ID);
        $result .= '</a>';
        $result .= '</p>';
        $result .= '<small>';
        $result .= get_the_time('M d, Y', $thumbnail);
        $result .= '</small>';
        $result .= '</div>';
    }

    $result .= '</ul>';
    return $result;
}

add_shortcode("post-list", "sc_post_list");

/**
 * Returns an array of all files in $directory_path of type $filetype.
 *
 * The $directory_uri + file name is used for the key
 * The file name is the value
 */
 
function options_stylesheets_get_file_list( $directory_path, $filetype, $directory_uri ) {
	$alt_stylesheets = array();
	$alt_stylesheet_files = array();
	if ( is_dir( $directory_path ) ) {
		$alt_stylesheet_files = glob( $directory_path . "/*/*.$filetype");
		foreach ( $alt_stylesheet_files as $file ) {
			$file = str_replace( $directory_path, "", $file);
			$alt_stylesheets[ $directory_uri . $file] = $file;
		}
	}
	return $alt_stylesheets;
}

// includes less php compiler
require_once get_stylesheet_directory().'/inc/Less_php/Less.php';

add_action('optionsframework_after_validate', 'less_compile'); // runs less_compile when business profiles is updated

function less_compile(){
	
	$theme = 'journal';
	
	// grabs form values from POST
	$template = get_template();
	// var_dump($_POST);
	$template = str_replace("-","_",$template);
	
	foreach ($_POST[$template] as $key => $val) {
	   // echo 'key= '.$key.'<br />';
	   // echo 'val = '.$val.'<br /><br />';
	    if($key == 'primary_color'){
		    $primary_color = $val;
	    }
	    if($key == 'body_background_color'){
		    $body_background_color = $val;
	    }
		if($key == 'secondary_color'){
		    $secondary_color = $val;
	    }
	}
	
	// compiles less to css
	$parser = new Less_Parser();
	// $parser->parseFile( get_stylesheet_directory().'/assets/less/build.less', '../../' );
	$parser->parseFile( get_stylesheet_directory().'/assets/less/_bootstrap.less', '../../' );
	$parser->parseFile( get_stylesheet_directory().'/assets/less/'.$theme.'/variables.less', '../../' );
	$parser->parseFile( get_stylesheet_directory().'/assets/less/'.$theme.'/bootswatch.less', '../../' );
	$parser->parseFile( get_stylesheet_directory().'/assets/less/main.less', '../../' );
	$parser->ModifyVars( array(
		'brand-primary'		=>	$primary_color,
		'body-bg' 			=>	$body_background_color,
		'brand-info' 		=>	$secondary_color,
		'headings-color'	=>	$primary_color
	) );
	
	// $parser->parse( '@color: #4D926F; #header { color: @color; } h2 { color: @color; }' );

	
	$css = $parser->getCss();
	
	// writes css file
	$myfile = fopen(get_stylesheet_directory()."/assets/css/styled/new_test/compiled_less.css", "w") or die("Unable to open file!");
	fwrite($myfile, $css);
	fclose($myfile);


}
