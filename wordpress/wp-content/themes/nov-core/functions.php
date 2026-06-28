<?php

defined('ABSPATH') || exit;

define('NOV_THEME_VERSION', '1.0.0');

define('NOV_THEME_PATH', get_template_directory());

define('NOV_THEME_URI', get_template_directory_uri());

require_once NOV_THEME_PATH . '/inc/setup.php';
require_once NOV_THEME_PATH . '/inc/enqueue.php';
require_once NOV_THEME_PATH . '/inc/menus.php';