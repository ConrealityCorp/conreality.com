<?php

// Shortcut to assets
function assets($path = '')
{
    echo get_template_directory_uri() . '/assets/' . $path;
}

// Embed svg
function svg_embed($path = '')
{
    echo file_get_contents(get_template_directory_uri() . '/assets/' . $path . '.svg');
}



// Show custom logo (image with link/image only at homepage)
function show_logo()
{
    if ($custom_logo = get_theme_mod('custom_logo'))
    {
        echo (is_front_page())
            ? wp_get_attachment_image($custom_logo, 'full', false, [
            'class'    => 'custom-logo',
            'itemprop' => 'logo'
        ])
            : get_custom_logo();
    }
}