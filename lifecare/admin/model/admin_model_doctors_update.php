<?php 
include("../comnpages/config.php");
    echo $id=$_REQUEST['did'];
     $name=$_REQUEST['name'];
      
	 $speciality=$_REQUEST['speciality'];
     $fees=$_REQUEST['fees'];
     $description=$_REQUEST['description'];

	$sql="UPDATE doctor_list SET name='$name', 
 speciality='$speciality',fees='$fees',description='$description' WHERE did=$id";
	
	echo $sql;
	$data=mysqli_query($conn,$sql);
	
	header('Location:../admin_Doctors_view.php?cid='.$id);
	
?>