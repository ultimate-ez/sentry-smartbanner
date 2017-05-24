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

class Sentry_SmartBanner {

  public function __construct() {
    add_action('wp_footer', array( $this, 'helloworld' ) );
  }

  public function helloworld(){
    echo "<p class='sentry_smartbanner'>Hello world</p>";
  }
}
new Sentry_SmartBanner();
?>
