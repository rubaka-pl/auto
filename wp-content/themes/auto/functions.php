<?php

add_action('wp_enqueue_scripts', function () {
    // Enqueue styles
    // wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap');
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    // Deregister default jQuery and register from CDN
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script('jquery');

    // Enqueue scripts
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);
});

// Theme supports
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

// Allow SVG uploads
add_filter('upload_mimes', 'svg_upload_allow');
function svg_upload_allow($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

// Fix MIME type for SVG files
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    } else {
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    }

    if ($dosvg) {
        if (current_user_can('manage_options')) {
            $data['ext'] = 'svg';
            $data['type'] = 'image/svg+xml';
        } else {
            $data['ext'] = false;
            $data['type'] = false;
        }
    }

    return $data;
}

// Change logo class
add_filter('get_custom_logo', 'change_logo_class');
function change_logo_class($html)
{
    $html = str_replace('custom-logo', 'logo', $html);
    $html = str_replace('custom-logo-link', 'logo', $html);
    return $html;
}
