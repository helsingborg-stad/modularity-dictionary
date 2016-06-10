<?php

/**
 * Plugin Name:       Modularity Dictionary
 * Plugin URI:        https://github.com/helsingborg-stad/modularity-dictionary
 * Description:       Add "hard to understand" words with explanation to a list. Your pages's content will then be searched and explanation will be added to the end of the page.
 * Version:           1.0.0
 * Author:            Kristoffer Svanmark
 * Author URI:        https://github.com/helsingborg-stad
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       modularity-dictionary
 * Domain Path:       /languages
 */

 // Protect agains direct file access
if (! defined('WPINC')) {
    die;
}

define('MODULARITYDICTIONARY_PATH', plugin_dir_path(__FILE__));
define('MODULARITYDICTIONARY_URL', plugins_url('', __FILE__));
define('MODULARITYDICTIONARY_TEMPLATE_PATH', MODULARITYDICTIONARY_PATH . 'templates/');

load_plugin_textdomain('modularity-dictionary', false, plugin_basename(dirname(__FILE__)) . '/languages');

require_once MODULARITYDICTIONARY_PATH . 'source/php/Vendor/Psr4ClassLoader.php';
require_once MODULARITYDICTIONARY_PATH . 'Public.php';

// Instantiate and register the autoloader
$loader = new ModularityDictionary\Vendor\Psr4ClassLoader();
$loader->addPrefix('ModularityDictionary', MODULARITYDICTIONARY_PATH);
$loader->addPrefix('ModularityDictionary', MODULARITYDICTIONARY_PATH . 'source/php/');
$loader->register();

// Start application
new ModularityDictionary\App();
