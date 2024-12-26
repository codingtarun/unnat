<?php

declare(strict_types=1);

namespace Framework;

class App
{
    /**
     *
     * This is the class where entire application will be initialized.
     * 
     * This is the point where all of the module i.e router, view , model etc integrate with each other
     *
     */
    private Router $router;

    public function __construct()
    {
        $this->router = new Router;
    }
    public function run()
    {
        echo "App is running";
    }

    public function get(string $path, string $method = 'GET',)
    {
        $this->router->add($path, $method);
    }
}
