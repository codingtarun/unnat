<?php

/*
|--------------------------------------------------------------------------
| Application file
|--------------------------------------------------------------------------
|
| Acts as glue for all the functionalities of the framework
|
*/


declare(strict_types=1);

namespace Framework;

class App
{
    private Router $router;
    public function __construct()
    {
        $this->router = new Router;
    }

    public function run()
    {
        echo "App is running";
    }

    public function add(string $path)
    {
        $this->router->add($path);
    }
}
