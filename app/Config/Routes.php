<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('organisations', 'OrgCrud::index');
$routes->get('add-org', 'OrgCrud::create');
$routes->post('/submit-form', 'OrgCrud::store');
$routes->get('editorg/(:num)', 'OrgCrud::singleUser/$1');
$routes->post('update', 'OrgCrud::update');
$routes->get('delete/(:num)', 'OrgCrud::delete/$1');
// app/Config/Routes.php

$routes->get('orgcrud/add-dynamic-column', 'OrgCrud::addDynamicColumn');
$routes->post('/saveDynamicColumn', 'OrgCrud::saveDynamicColumn');

