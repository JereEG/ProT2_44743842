<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('quienes_somos', 'Home::f_quienes_somos');
$routes->get('acerca_de', 'Home::f_acerca_de');
