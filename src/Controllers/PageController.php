<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class PageController
{
	public function indexAction(RouteCollection $routes)
	{

		require_once __DIR__ . '/../Views/home.php';

    }

    public function galleryAction(RouteCollection $routes)
    {
        require_once __DIR__ . '/../Views/gallery.php';
    }
}