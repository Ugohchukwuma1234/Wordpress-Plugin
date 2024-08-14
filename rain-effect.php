<?php
/*
Plugin Name: Rain Effect
Plugin URI:  http://Chocolatechow.com/
Description: Adds a rain effect to all pages.
Version:     1.0
Author:      Ugoh Chukwuma
Author URI:  http://Chocolatechow.com/
License:     GPL2
*/

function rain_effect_enqueue_scripts() {
    wp_enqueue_script('raindrops-js', plugins_url('raindrops.js', __FILE__), array('jquery'), null, true);
    wp_enqueue_style('raindrops-css', plugins_url('raindrops.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'rain_effect_enqueue_scripts');
