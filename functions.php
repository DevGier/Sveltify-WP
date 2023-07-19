<?php

/**
 * File loader iwth glob
 *
 * @param  mixed $dir
 * @return void
 */
function load_files($dir)
{
    $files = glob($dir);
    foreach ($files as $file) {
        if (is_dir($file)) {
            load_files($file);
        }

        if (is_file($file)) {
            require_once($file);
        }
    }
}


/**
 * Small autoload
 *
 * @return void
 */
function autoload_app()
{
    load_files(__DIR__ . '/app/*.php');
}

/**
 * Start autoload
 */
autoload_app();
