<?php

include 'init.php';


$display = $_GET['d'] ?? 'login';


switch ($display){
    case 'login':
        view('login');
        break;
    default:
        view('404');
}