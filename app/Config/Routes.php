<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get("zeme/(:num)", 'Main::zeme/$1');
$routes->get("data/(:num)", 'Main::data/$1');
$routes->get("info/(:num)", 'Main::info/$1');
$routes->get("prehled", 'Main::prehled');