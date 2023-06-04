<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class PageController
{
	public function indexAction(RouteCollection $routes)    
	{
        include_once "../src/Views/Partials/navbar.php";
		require_once __DIR__ . '/../Views/home.php';
    }

    public function galleryAction(RouteCollection $routes)
    {
        include_once "../src/Views/Partials/navbar.php";
        require_once __DIR__ . '/../Views/gallery.php';
    }

    public function meAction(RouteCollection $routes)
    {
        include_once "../src/Views/Partials/navbar.php";
        require_once __DIR__ . '/../Views/me.php';
    }
    public function loginAction(RouteCollection $routes)
    {
        include_once "../src/Views/Partials/navbar.php";
        require_once __DIR__ . '/../Views/Userdata/login.php';
    }
    public function registerAction(RouteCollection $routes)
    {
        include_once "../src/Views/Partials/navbar.php";
        require_once __DIR__ . '/../Views/Userdata/register.php';
    }
}