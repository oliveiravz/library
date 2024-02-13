<?php
session_start();
require_once("../vendor/autoload.php");

use app\core\Router;

Router::run();