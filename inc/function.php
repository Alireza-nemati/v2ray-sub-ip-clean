<?php

if (!defined('RUN_APP')) {
    exit;
}
function login(): void
{
    if (!isset($_SESSION['user_login'])) {
        header('Location: '.SITE_URL.'?d=login');
    }
}

function view($viewName): void
{
    include_once 'views/'.$viewName.'.php';
}
