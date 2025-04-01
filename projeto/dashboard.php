<?php
session_start();
include('functions.php');

// verificar login
if (!isset($_SESSION['tipo'])) {
    header("Location: login.php");
    exit();
}

// logout
if (isset($_GET['logout'])) {
    logout();
}
?>