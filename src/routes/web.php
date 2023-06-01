<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route('/', array('controller' => 'PageController', 'method' => 'indexAction'), array()));
$routes->add('gallery', new Route('/gallery', array('controller' => 'PageController', 'method' => 'galleryAction'), array()));