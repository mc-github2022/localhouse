<?php

// Load CSS & JS etc.

function theLocalHouse_assets() {
    wp_enqueue_style('theStyle', get_template_directory_uri() . '/css/main.css', microtime());
}

add_action('wp_enqueue_scripts', 'theLocalHouse_assets');