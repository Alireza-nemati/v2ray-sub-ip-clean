<?php



$action = $_GET['action'] ?? null;

switch ($action){
    case 'login':
        if(
            isset($_POST['username']) &&
            isset($_POST['password']) &&
            ($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD)
        ){

        }
        break;
    default:
        die("Invalid action");
}