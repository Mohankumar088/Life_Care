<?php
session_start();
//ob_start();

unset($_SESSION['semailid']);
unset($_SESSION['spassword']);
session_destroy();

header("location:../patientlogin.php");
?>