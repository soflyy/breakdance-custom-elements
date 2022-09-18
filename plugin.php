<?php

/**
 * Plugin Name: Oxydance
 * Plugin URI: https://breakdance.com/
 * Description: ALPHA - NOT TO BE USED IN PRODUCTION
 * Author: @alpabuz 
 * Author URI: https://t.me/alpabuz
 * License: GPLv2
 * Text Domain: oxydance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace BreakdanceCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'BreakdanceCustomElements',
        'element',
        'Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'BreakdanceCustomElements',
        'macro',
        'Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'BreakdanceCustomElements',
        'preset',
        'Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
