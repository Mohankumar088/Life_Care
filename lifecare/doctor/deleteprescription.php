<?php 
$id = $_GET['id'];
include "dbconfigure.php";
$query = "delete from prescription where id='$id'";
my_iud($query);
header("location:view_prescription.php");
?>