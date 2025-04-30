<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::homeDashboard');
$routes->get('/home', 'Home::homeDashboard');
$routes->get('/admin', 'Admin::adminDashboard');
$routes->get('/user', 'User::userDashboard');  // New route for user dashboard
$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::Login');
$routes->get('/logout', 'Auth::logout');

// Add this for 404 handling
$routes->set404Override(function() {
    return view('errors/html/error_404');
});