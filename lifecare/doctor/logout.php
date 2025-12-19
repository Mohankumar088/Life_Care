<?php
session_start();
ob_start();

unset($_SESSION['semailid']);
unset($_SESSION['spassword']);
session_destroy();
setcookie('cemailid',"",time()-60*60*24*7);
setcookie('cpassword',"",time()-60*60*24*7);
header("location:doctorlogin.php");
?>