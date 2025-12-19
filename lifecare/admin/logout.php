<?php
session_start();
ob_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_type']);

#header('location:login.php');
echo '<script type="text/javascript">
         window.location = "./login.php";
      </script>';
?>