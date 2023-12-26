<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/service', 'Home::service');
$routes->get('/team', 'Home::team');
$routes->get('/contact', 'Home::contact');
