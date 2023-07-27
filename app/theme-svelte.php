<?php

if (!defined('ABSPATH')) {
    exit('Forbidden');
}

/**
 * Remove all default template redirects
 */
remove_action('template_redirect', 'redirect_canonical');

/**
 * Remove redirects and redirect all requests to index.php
 */
function remove_redirects()
{
    add_rewrite_rule('^/(.+)/?', 'index.php', 'top');
}
add_action('init', 'remove_redirects');

/**
 * Add module support to sveltify-js
 */
function add_type_attribute($tag, $handle, $src)
{
    if ('sveltify-js' !== $handle) {
        return $tag;
    }
    $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    return $tag;
}
add_filter('script_loader_tag', 'add_type_attribute', 10, 3);

/**
 * Load Svelte scripts
 */
function load_react_scripts()
{
    if (file_exists(get_stylesheet_directory() . '/dist/main.js')) {
        wp_enqueue_script('sveltify-js', get_stylesheet_directory_uri() . '/dist/main.js', ['jquery'], filemtime(get_stylesheet_directory() . '/dist/main.js'), false);
    }
    if (file_exists(get_stylesheet_directory() . '/dist/style.css')) {
        wp_enqueue_style('sveltify-css', get_stylesheet_directory_uri() . '/dist/style.css', [], filemtime(get_stylesheet_directory() . '/dist/style.css'));
    }
}
add_action('wp_enqueue_scripts', 'load_react_scripts', 100);
