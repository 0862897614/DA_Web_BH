<?php
session_start(); 
session_unset();
session_destroy();

header("Location: /Doan_Web/admin/login.php");
exit();
?>
