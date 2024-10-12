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

/*
|--------------------------------------------------------------------------
| Namespace
|--------------------------------------------------------------------------
|
| A way of grouping related classes, interfaces, functions togeather.
| Namespace can be considered as a 'Virtual' folder that keeps related 
| files togeather.
| If two classes have the same name but are used in different contexts,
| namespace prevents conflicts.
|
|
*/

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
