<?php

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Responsible for initializing the App
| Entry point of the application
|
*/


include __DIR__ . "/../src/App/functions.php";
include __DIR__ . "/../src/App/bootstrap.php";

$app->run();

dd($app);
