<?php

require('../comnpages/config.php');
            
	        $name=$_POST['name'];
			$speciality=$_POST['speciality'];
			$fees=$_POST['fees'];
			$description=$_POST['description'];
			$clinicid=$_POST['clinicid'];
			$file_name=$_FILES['image']['name'];
            $file_tmp=$_FILES['image']['tmp_name'];
		   //$aname=$title.".".explode(".",$file_name)[1];
            move_uploaded_file($file_tmp,"../../images/Doctors/".$file_name);
			
			
	 $sql="INSERT INTO doctor_list(name,image,speciality,fees,description,clinic_ids) 
	VALUES ('$name','$file_name','$speciality','$fees','$description','$clinicid')";				
	$result=mysqli_query($conn,$sql);
	//die();
	
		echo '<script type="text/javascript">                
                window.location = "../admin_Doctors.php"; 
			  </script>';
	


?>