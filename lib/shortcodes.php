<?php

/* section title */	
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
        $result .= '</li>';
    }

    $result .= '</ul>';
    return $result;
}
add_image_size( 'post_list', 80, 80, true );
add_shortcode("post-list", "sc_post_list");


function sc_post_excerpt($atts, $content = null)
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
        $result .= get_the_excerpt();
        $result .= '</li>';
    }

    $result .= '</ul>';
    return $result;
}
add_shortcode("post-excerpt", "sc_post_excerpt");





//// hipaa shortcodes
function hippa_company(){
	$hippa_company = of_get_option('hippa_company_name');
	return $hippa_company;
	}
	add_shortcode('hippa_company', 'hippa_company');

function hippa_domain_name(){
	$hippa_domain_name = of_get_option('hippa_domain_name');
	return $hippa_domain_name;
	}
	add_shortcode('hippa_domain_name', 'hippa_domain_name');
	
function privacy_officer_name(){
	$privacy_officer_name = of_get_option('hippa_privacy_officer_name');
	return $privacy_officer_name;
	}
	add_shortcode('privacy_officer_name', 'privacy_officer_name');
	
function privacy_officer_email(){
	$privacy_officer_email = of_get_option('hippa_privacy_officer_email');
	return $privacy_officer_email;
	}
	add_shortcode('privacy_officer_email', 'privacy_officer_email');

function privacy_officer_phone(){
	$privacy_officer_phone = of_get_option('hippa_privacy_officer_phone');
	return $privacy_officer_phone;
	}
	add_shortcode('privacy_officer_phone', 'privacy_officer_phone');
	
function privacy_officer_address(){
	$privacy_officer_address = of_get_option('hippa_privacy_officer_address');
	return $privacy_officer_address;
	}
	add_shortcode('privacy_officer_address', 'privacy_officer_address');

//// address shortcodes
function company_name_sc(){
	$company_name = of_get_option('company_name');
	return $company_name;
	}
	add_shortcode('company_name', 'company_name_sc');

/*
function main_phone_number_sc(){
	$main_phone_number = of_get_option('main_phone_number');
	return $company_name;
	}
	add_shortcode('main_phone_number', 'main_phone_number_sc');
*/

function company_address_sc( $atts ){
	ob_start();
	include(get_stylesheet_directory()."/inc/location_variables.php");
	
	
	$a = shortcode_atts( array(
		'part' => 'address',
		'location' => '1',
	), $atts );
	
	$address1 = array(
		'address' => $main_street." ".$main_city.", ".$main_state." ".$main_zip,
		'street' => $main_street,
		'street2' => $street_address_second_line,
		'city' => $main_city,
		'state' => $main_state,
		'zip' => $main_zip,
		'phone' => $main_phone_number,
	);
	$address2 = array(
		'address' => $second_street." ".$second_city.", ".$second_state." ".$second_zip,
		'street' => $second_street,
		'street2' => $second_street_address_second_line,
		'city' => $second_city,
		'state' => $second_state,
		'zip' => $second_zip,
		'phone' => $second_phone_number,
	);
	$address = array(
		'1' => $address1,
		'2' => $address2,	
	);
	
		//$ad_part = $a['part'];
	ob_end_clean();
	return $address[$a['location']][$a['part']];

	
	}
add_shortcode('address', 'company_address_sc');

function employee_bios(){
	ob_start();
	include(get_stylesheet_directory()."/inc/employee_bios.php");    
	$result = ob_get_contents();
	ob_end_clean(); 	 
	return $result;
	}
	add_shortcode('employee_bios', 'employee_bios');