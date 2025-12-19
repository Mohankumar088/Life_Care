	<?php
  session_start();

 
	
	 

  echo "<PRE> i";

 


if(isset($_POST['btn_sub']))
{

require('../comnpages/config.php');

$doctor_id=$_SESSION['doctor_id'];

 
print_r($_SESSION);
$image="hjdsfh";
   
     $name=$_POST['name'];
      
	 $speciality=$_POST['speciality'];
     $fees=$_POST['fees'];
     $description=$_POST['description'];

 

    echo   $sql="UPDATE doctor_list SET name='$name'  , speciality= '$speciality' , fees= '$fees'  WHERE did= $doctor_id  ";

 
	$data=mysqli_query($conn,$sql);

  

if (mysqli_query($conn, $sql)) {
   	echo '  <script type="text/javascript">
              window.location ="../index.php?profile_updated";
 	</script>';


} else {
    echo "Error updating : "  ;
}




 }else{ echo "hi";
 	echo '  <script type="text/javascript">
              window.location ="../../index.php?invalidUSER";
 	</script>';




 }
	
	 
  ?>