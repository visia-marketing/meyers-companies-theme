<?php

namespace Roots\Sage\Tinymce;

use Roots\Sage\Setup;

/**
 * Add custom colors
 */

function my_mce_color_options($init) {

  $default_colors = file_get_contents( get_template_directory() . '/tinymce/default_colors.json' );
  $custom_colors = file_get_contents( get_template_directory() . '/tinymce/custom_colors.json' );

  // build colour grid default+custom colors
  $init['textcolor_map'] = '['.$default_colors.','.$custom_colors.']';

  // rows: ceil(41 colors / 8 cols) = 6
  $init['textcolor_rows'] = 6;

  return $init;
}
add_filter('tiny_mce_before_init', __NAMESPACE__ . '\\my_mce_color_options');



/**
 * Add styles to TinyMCE
 */

 function wpb_mce_buttons_2($buttons) {
  array_unshift($buttons, 'styleselect');
  return $buttons;
}
add_filter('mce_buttons_2', __NAMESPACE__ . '\\wpb_mce_buttons_2');



/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

// fetch json object
$style_formats = file_get_contents( get_template_directory() . '/tinymce/style_formats.json' );
  
// Insert the array, JSON ENCODED, into 'style_formats'
$init_array['style_formats'] =  $style_formats ;  

 
return $init_array;  
 
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', __NAMESPACE__ . '\\my_mce_before_init_insert_formats' ); 

