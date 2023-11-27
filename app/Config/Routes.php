<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/detailkabkdr', 'Home::detailkediri');

$routes->get('/detailberita/(:any)', 'Home::detailberita/$1');
$routes->get('/beritakediriraya', 'Home::allberita');
$routes->get('/galeri', 'Home::allgalery');
$routes->post('/contactnetizen', 'Home::contactnetizen');
$routes->get('/visimisi', 'Home::visimisi');
$routes->get('/tugaspokok', 'Home::tugaspokok');
$routes->get('/strukturorganisasi', 'Home::strukturorg');
$routes->get('/sekretariat', 'Home::sekretariat');
$routes->get('/analisdata', 'Home::analisdata');
$routes->get('/pmm', 'Home::pmm');
$routes->get('/esda', 'Home::esda');
$routes->get('/ipw', 'Home::ipw');
$routes->get('/dokumen', 'Home::dokumenbpd');
$routes->get('/datapenduduk', 'Home::datapenduduk');
$routes->get('/dataekonomi', 'Home::datapertumbuhanekonomi');
$routes->get('/datainflasi', 'Home::perkeminflasi');
$routes->get('/dataipm', 'Home::dataipm');
