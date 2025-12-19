<?php 
include "dbconfigure.php";

$id = $_GET['id'];
$query = "delete from patient where id=$id";

my_iud($query);
header("location:admin_allPatient.php");
?>