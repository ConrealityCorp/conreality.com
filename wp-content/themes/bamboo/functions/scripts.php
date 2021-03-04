<?php

// Load CSS & JS
add_action('wp_enqueue_scripts', function () {

    global $wp_query;

    // Disable caching of scripts & styles in dev mode
    $cache = (WP_DEBUG) ? microtime() : null;

    // Deregister/register Jquery
    if (!is_admin()) {
        wp_deregister_script('jquery');
        // wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.5.1.min.js', null, null, true);
    }

    // Custom styles / js (desktop / mobile)
    if (!wp_is_mobile()) {
        wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/desktop-styles.css', null, $cache);
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/desktop-scripts.js', null, $cache, true);
        // wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/desktop-scripts.js', ['jquery'], $cache, true);
    } else {
        wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/mobile-styles.css', null, $cache);
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/mobile-scripts.js', null, $cache, true);
        // wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/mobile-scripts.js', ['jquery'], $cache, true);
    }
    // Set local js vars
    wp_localize_script('scripts', 'BAMBOO', [
        'baseUrl'     => home_url(),
        'ajaxUrl'     => admin_url('admin-ajax.php'),
        'themeAssets' => get_template_directory_uri() . '/assets/'
    ]);
});