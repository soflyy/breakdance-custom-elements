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
 * Version: 1.0.0
 */

namespace BreakdanceCustomElements;

add_action('breakdance_loaded', function() {
    \Breakdance\ElementStudio\registerElementsLocation(
        'breakdance-custom-elements/elements',
        'BreakdanceCustomElements',
        'Custom Elements',
        false
    );
});