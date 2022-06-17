<?php

/**
 * Plugin Name: Breakdance Custom Elements
 * Plugin URI: https://breakdance.com/
 * Description: ALPHA - NOT TO BE USED IN PRODUCTION
 * Author: Breakdance
 * Author URI: https://breakdance.com/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace BreakdanceCustomElements;

add_action('breakdance_loaded', function() {
    \ray(basename(__DIR__));

    \Breakdance\ElementStudio\registerElementsLocation(
        basename(__DIR__) . '/elements',
        'BreakdanceCustomElements',
        'Custom Elements',
        false
    );
});