<?php
session_start();
include './vendor/autoload.php';

use App\Html\CityRequest;
use App\Html\Request;


Request::handle();
