<?php 

session_start();
session_destroy();
unset($_SESSION);
header("Location: ../sign-in.php");
exit();
