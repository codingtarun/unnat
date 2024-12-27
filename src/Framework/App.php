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
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        $this->router->dispatch($path, $method);
    }

    public function get(string $path, array $controller, string $method = 'GET',)
    {
        $this->router->add($path, $controller, $method);
    }
}
