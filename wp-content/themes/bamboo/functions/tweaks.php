<?php

//------------------------------------------- Admin tweaks

// Hide Dashboard
add_action('after_setup_theme', function () {
    show_admin_bar(false);
});

// Hide ACF from menu
// add_filter('acf/settings/show_admin', '__return_false');

// Dashboards tweaks
if (is_admin()) {

    // Disable Aggressive Updates & browser check
    remove_action('admin_init', '_maybe_update_core');
    remove_action('admin_init', '_maybe_update_plugins');
    remove_action('admin_init', '_maybe_update_themes');
    remove_action('load-plugins.php', 'wp_update_plugins');
    remove_action('load-themes.php', 'wp_update_themes');
    add_filter('pre_site_transient_browser_' . md5($_SERVER['HTTP_USER_AGENT']), '__return_true');

    // Remove thank you WP in admin
    add_action("admin_init", function () {
        add_filter("admin_footer_text", function () {
            return null;
        }, 11);
    });

    // Hide WP version from Admin footer
    add_action('admin_menu', function () {
        remove_filter('update_footer', 'core_update_footer');
    });

    // Remove Quick Draft Dashboard Widget
    add_action('wp_dashboard_setup', function () {
        remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    }, 999);

    // Remove WP links from admin
    add_action('wp_before_admin_bar_render', function () {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('wp-logo'); // Remove the WordPress logo
        $wp_admin_bar->remove_menu('about'); // Remove the about WordPress link
        $wp_admin_bar->remove_menu('wporg'); // Remove the WordPress.org link
        $wp_admin_bar->remove_menu('documentation'); // Remove the WordPress documentation
        $wp_admin_bar->remove_menu('support-forums'); // Remove the support forums link
        $wp_admin_bar->remove_menu('feedback'); // Remove the feedback link
        $wp_admin_bar->remove_menu('updates'); // Remove the updates link
        $wp_admin_bar->remove_menu('comments'); // Remove the comments link
    }, 999);

    // Disable theme & plugin edit from admin
    add_action('_admin_menu', function () {
        remove_action('admin_menu', '_add_themes_utility_last', 101);
    }, 1);

    // Remove default widgets
    add_action('widgets_init', function () {
        unregister_widget('WP_Widget_Archives'); // Архивы
        unregister_widget('WP_Widget_Calendar'); // Календарь
        unregister_widget('WP_Widget_Categories'); // Рубрики
        unregister_widget('WP_Widget_Meta'); // Мета
        unregister_widget('WP_Widget_Pages'); // Страницы
        unregister_widget('WP_Widget_Recent_Comments'); // Свежие комментарии
        unregister_widget('WP_Widget_Recent_Posts'); // Свежие записи
        unregister_widget('WP_Widget_RSS'); // RSS
        unregister_widget('WP_Widget_Search'); // Поиск
        unregister_widget('WP_Widget_Tag_Cloud'); // Облако меток
        unregister_widget('WP_Widget_Text'); // Текст
        unregister_widget('WP_Nav_Menu_Widget'); // Произвольное меню
    });
}

// Remove comments from WP
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;

    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);
// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

// Remove unneeded menus
add_action('admin_menu', function () {
    // remove_menu_page('index.php');                  //Dashboard
    remove_menu_page('edit-comments.php'); //Comments
    // remove_menu_page('tools.php');                  //Tools
    remove_menu_page('edit.php'); //Posts
    // remove_menu_page('upload.php');                 //Media
    // remove_menu_page('edit.php?post_type=page');    //Pages
    // remove_menu_page('themes.php');                 //Appearance
    // remove_menu_page('plugins.php');                //Plugins
    // remove_menu_page('users.php');                  //Users
    // remove_menu_page('options-general.php');        //Settings
});

// ---------------------------------------------- FRONTEND TWEAKS

// Remove service meta tags in html
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

/**
 * Disable the emoji's
 */
function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
    add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}

add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
    if ('dns-prefetch' == $relation_type) {
        /* This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

        $urls = array_diff($urls, array($emoji_svg_url));
    }

    return $urls;
}

// Hide WP version
function security_remove_version()
{
    return '';
}

add_filter('the_generator', 'security_remove_version');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);
