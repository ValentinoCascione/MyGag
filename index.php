<?php
require './config.php';


include $PATHS['functions'];
include $PATHS['functionsTable'];

$REQUEST_URI = $_SERVER['REQUEST_URI'];

if ($REQUEST_URI == '/register') {
    include $PATHS['register'];
} elseif ($REQUEST_URI == '/' || $REQUEST_URI == '/home') {
    include $PATHS['home'];
} elseif ($REQUEST_URI == '/adminlogin') {
    include $PATHS['adminlogin'];
} elseif ($REQUEST_URI == '/create') {
    include $PATHS['create'];
} elseif ($REQUEST_URI == '/login') {
    include $PATHS['login'];
} elseif ($REQUEST_URI == '/logout') {
    include $PATHS['logout'];
} elseif ($REQUEST_URI == '/update') {
    include $PATHS['update'];
}elseif ($REQUEST_URI == '/delete') {
    deletePost($_POST['del-2']);
    header('location:home');
}else {
    include $PATHS['404'];
}

include $PATHS['footer']; 

?>