<?php 

session_start();
unset($_SESSION["admin_user"]);  
unset($_SESSION["admin_email"]);  
session_destroy();
header("Location: ../../../index");

?>