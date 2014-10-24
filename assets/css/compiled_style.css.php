<?php


 $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
 $wp_load = $absolute_path[0] . 'wp-load.php';
 require_once($wp_load);

$css = get_option('css');
echo $css;
$css2 = of_get_option('custom_css');
echo $css2;

  header('Content-type: text/css');
  header('Cache-control: must-revalidate');

?>