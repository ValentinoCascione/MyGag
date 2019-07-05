<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login');
}

//require './config.php';
include $PATHS['header'];  

// include $PATHS['functions'];
// include $PATHS['functionsTable'];

$rows = getAllPosts();
showTab($rows);

include $PATHS['footer']; 