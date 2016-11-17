<?php

session_start();
require_once 'core/route.php';
require_once 'config/routes.php';
$route = new Route();
$route->start();
