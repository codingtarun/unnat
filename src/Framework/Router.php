<?php

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $routes = [];

    public function add(string $path, array $controller, string $method,)
    {
        $this->routes[] = [
            'path' => $this->normalizePath($path),
            'method' => strtoupper($method),
            'controller' => $controller
        ];
    }

    private function normalizePath(string $path): string
    {
        /**
         * 
         * PHP trim() function : 
         * 1. The trim() function in PHP is used to remove whitespace or predefined characters
         *    from the beginning and end of a string.
         * 
         **/
        $path = trim($path, '/');
        $path = "/{$path}/";

        /**
         * 
         * Regular Expression (RegEx): 
         * 1. A powerful tool to search, match & menupulte the string based on given pattren.
         * 
         * List of some common RegEx : 
         * 1. preg_match() : Finds a match for a pattren in a string.
         * 2. preg_match_all() : Finds and matched for a pattren in a string.
         * 3. preg_replace() : Replaces matches with specified text.
         * 4. preg_split() : Splits a string based on given pattren.
         * 
         * Get online RegEx : https://regex101.com/
         * 
         * ==> DO MORE STUDY ON REGEX 
         * 
         **/

        $path = preg_replace('#[/]{2,}#', '/', $path);

        return $path;
    }

    public function dispatch(string $path, string $method)
    {
        $path = $this->normalizePath($path);
        $method = strtoupper($method);
        foreach ($this->routes as $route) {
            if (!preg_match("#^{$route['path']}$#", $path) || $route['method'] !== $method) {
                continue;
            }
            [$class, $function] = $route['controller'];
            $controllerInstance = new $class;
            $controllerInstance->$function();
        }
    }
}
