<?php

/**
 * Bootstrap file for PHPUnit tests.
 */

// Core system directory
define('BASEPATH', __DIR__ . '/../system/');         

// Application directory
define('APPPATH', __DIR__ . '/../application/');    

// Views directory
define('VIEWPATH', APPPATH . 'views/');             

// Set environment to testing
define('ENVIRONMENT', 'testing');

// Load project config
require_once __DIR__ . '/../config.php';

// Load Composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Disable output buffering
ob_start();

// Load CodeIgniter
require_once BASEPATH . 'core/CodeIgniter.php';

// Clear output buffer
ob_end_clean();
