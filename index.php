<?php

use Framework\Routing\Request;
use Framework\Routing\Router;

require_once "vendor/autoload.php";
echo (new Router(new Request()))->getContent();