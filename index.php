<?php
//Asia/Tehran
date_default_timezone_set('Asia/Tehran');
require 'vendor/autoload.php';


error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

$router = require "App/Router.php";

