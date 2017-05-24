<?php
/*
Plugin Name: Sentry SmartBanner
Plugin URI:
Description: Sentry SmartBannerは汎用のバナーをページに表示するためのプラグインです。
Version: 1.0.0
Author: Masashi Ezaki
Autohr URI: https://ultimate-ez.com
License: GPL2
*/

add_action('wp_footer', 'helloworld');

function helloworld(){
  echo "--- Hello world ---";
}

?>
