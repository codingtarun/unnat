<?php

include __DIR__ . '/../src/App/functions.php';

/**
 * 
 * Entry Point of the PHP Framework
 *
 * This file serves as the entry point for the PHP framework. It is responsible for:
 * - Initializing the application environment
 * - Loading necessary configuration files
 * - Setting up autoloading for classes
 * - Handling incoming HTTP requests
 * - Routing requests to the appropriate controllers
 * - Sending the final response back to the client
 *
 * Ensure that this file is placed in the root directory of your project.
 * All requests to your application should be directed to this file.
 * 
 */

/**
 * 
 * PHP ini_set / ini_get : 
 * ini_set(string $option, string $value) : A inbuild PHP function which allows user to modify/ override the current PHPconfiguations.
 * It only works for the current script. It does not change the system configuration.
 * ini_get(string $option) : A inbuild PHP function which allows user to get the current PHP configuations.
 *
 */

// echo "MEMORY LIMIT : " . ini_get('memory_limit');

ini_set('memory_limit', '512M'); // Overriding the default setting

$app = include __DIR__ . '/../src/App/bootstrap.php';

$app->run();

// dd($app);
