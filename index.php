<?php
// Main entry point that sets up routing and directs homepage requests to the HomeController

require_once __DIR__ . '/app/Router.php';
require_once __DIR__ . '/app/controllers/HomeController.php';

$router = new Router();

$router->get('/', [HomeController::class, 'index']);

$router->resolve();
