<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Config\Path;
use Framework\TemplateEngine;

class HomeController
{
    private TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine(Path::VIEW);
    }
    public function home()
    {
        $this->view->render("/index.php", ["text" => "HELLO PHP FROM HOMEPAGE"]);
    }
}
