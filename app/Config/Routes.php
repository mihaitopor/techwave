<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/about', 'About::index');
$routes->get('/anexe/gdpr', 'Anexe::gdpr');
$routes->get('/blog', 'Blog::index');
$routes->get('/blog/blog_massage', 'Blog::blog_massage');
$routes->get('/blog/blog_synergy', 'Blog::blog_synergy');
$routes->get('contact', 'Contact::index');

$routes->post('/home/contact', 'Home::contact');

$routes->get('/projects', 'Projects::index');
$routes->get('/projects/theprofile', 'Projects::theprofile');
$routes->get('/projects/therapy', 'Projects::therapy');
$routes->get('/projects/srrom', 'Projects::srrom');
$routes->get('/projects/cartoon', 'Projects::cartoon');
$routes->get('/projects/mindbugs_platform', 'Projects::mindbugs_platform');
$routes->get('/projects/transparency', 'Projects::transparency');
$routes->get('/projects/mindbugs_app', 'Projects::mindbugs_app');
$routes->get('/administrare', 'Projects::massage_administration');
$routes->get('/projects/massage_administration', 'Projects::massage_administration');
$routes->get('/projects/kg', 'Projects::kg');
$routes->get('/mihai', 'Projects::mihai');
$routes->get('/ioana', 'Projects::ioana');

