<?php 
include "dbconfigure.php";

$id = $_GET['id'];
$query = "delete from blogpost where id=$id";

my_iud($query);
header("location:managepost.php");
?>