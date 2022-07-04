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
    \Breakdance\ElementStudio\registerSaveLocation(
        basename(__DIR__) . '/elements',
        'BreakdanceCustomElements',
        'element',
        'Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        basename(__DIR__) . '/macros',
        'BreakdanceCustomElements',
        'macro',
        'Custom Macros',
        false,
    );

//    \Breakdance\ElementStudio\registerSaveLocation(
//        basename(__DIR__) . '/presets',
//        'BreakdanceCustomElements',
//        'preset',
//        'Custom Presets',
//        false,
//    );
});