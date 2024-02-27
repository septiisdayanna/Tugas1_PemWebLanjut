<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'NilaiController::index');
$routes->post('/nilai/hitung', 'NilaiController::hitung');
$routes->add('/nilai_form', 'NilaiController::index');
