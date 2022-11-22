<?php
include 'server.php';
session_start();

unset($_SESSION["seller_reg_id"]);

unset($_SESSION["name"]);

header("location:home.php");

?>