<?php
/**
 * Bootstrap file to suppress deprecations from vendor code
 */

require_once __DIR__ . '/../vendor/autoload.php';

// Suppress deprecations from vendor directories
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    // Check if the error is from vendor directory
    if (strpos($errfile, '/vendor/') !== false && $errno === E_DEPRECATED) {
        // Suppress deprecations from vendor code
        return true;
    }
    // Let other errors through
    return false;
}, E_DEPRECATED);

