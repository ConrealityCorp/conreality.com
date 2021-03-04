<?php

// Customize theme
add_action('after_setup_theme', 'customize_bamboo_theme');
function customize_bamboo_theme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'gallery', 'caption']);

    // Register menu(s)
    register_nav_menu('header_menu', 'Menu in header');
}


// Remove quality loss for images
add_filter('jpeg_quality', function ($arg = '') {return 100;});

// Custom admin logo
add_action('login_head', function () {
    echo '<style>h1 a { background-image:url(' . get_bloginfo('template_directory') . '/assets/img/logo.svg)!important; background-size: 100% 100% !important;}</style>';
});

// Add contact info to admin
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
      'page_title' => 'Contacts',
      'menu_title' => 'Contacts',
      'menu_slug'  => 'contacts-settings',
      'icon_url'   => 'dashicons-email-alt2',
      'position'   => 60,
      'redirect'   => false
  ));
}

// Custom images sizes
if (function_exists('add_image_size')) {
  add_image_size('about-thumb1', 435, 294);
  add_image_size('about-thumb1-mob', 255, 169);
  add_image_size('about-thumb2', 725, 440);
  add_image_size('about-thumb2-mob', 323, 192);
  add_image_size('model-thumb', 560, 560);
  add_image_size('model-thumb-mob', 255, 255);
  add_image_size('slider-thumb', 970, 636);
  add_image_size('slider-thumb-mob', 375, 245);
  add_image_size('member-thumb', 270, 270);
  add_image_size('contacts-thumb', 725, 720);
  add_image_size('video-thumb', 191, 142);
}