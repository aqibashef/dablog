<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Plugin Name: Primary Categories
 * Description: Enebles user to select a primary category for posts and custom posts types and display posts based on their primary categories.
 * Plugin URI: http://jacobmckinney.com/primary-categories
 * Author: Jacob McKinney
 * Version: 1.0.0
 * Author URI: http://jacobmckinney.com/
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright 2016 Jacob McKinney
 */

// Define constant for plugin path
define( 'PC_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

// include files containing meta box and shortcode
include PC_PLUGIN_PATH . 'classes/class-pc-meta-box.php';
include PC_PLUGIN_PATH . 'classes/class-pc-shortcode.php';

$meta_box = new PC_Meta_Box();

$shortcode = new PC_Shortcode();
