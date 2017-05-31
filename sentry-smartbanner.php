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
    add_action( 'init', array( $this, 'enqueue_scripts_and_styles' ) );

    add_action('wp_footer', array( $this, 'helloworld' ) );
  }

  public function enqueue_scripts_and_styles() {
    //css
		wp_enqueue_style( 'sentry_smartbanner', plugins_url( 'sentry-smartbanner.css' , __FILE__ ) );
  }

  public function helloworld(){
    echo "<p class='sentry_smartbanner'>Hello world</p>";
  }
}
new Sentry_SmartBanner();
?>
