<?php

declare(strict_types=1);

/**
 * Bootstrap file to load all the required files.
 *
 * This file is responsible for initializing the application by including
 * all necessary dependencies and configuration files. It sets up the
 * environment, autoloads classes, and prepares the application to handle
 * incoming requests.
 *
 * Key responsibilities:
 * - Load configuration settings
 * - Register autoloaders
 * - Include necessary libraries and helper functions
 * - Initialize application components
 *
 * This file is typically included at the beginning of the application's
 * entry point (e.g., index.php) to ensure that the application is properly
 * set up before handling any requests.
 */

require __DIR__ . '/../../vendor/autoload.php';
//include __DIR__ . '/../Framework/App.php';

use Framework\App;

$app = new App();
return $app;
