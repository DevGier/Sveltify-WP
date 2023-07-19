<?php

if (!defined('ABSPATH')) {
    exit('Forbidden');
}

/**
 * Theme initialisation
 */
function init()
{
    define('DISALLOW_FILE_EDIT', true);
}
add_action('after_setup_theme', 'init');
