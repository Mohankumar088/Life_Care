<?php
require('../comnpages/config.php');
            
	       
			//echo $clinic_id=$_POST['clinic_id']; 
			
			echo$docname=$_POST['docname']; 
			$name=$_POST['name'];
			$address=$_POST['address'];
			$location=$_POST['location'];
			$time_mon_sat=$_POST['time_mon_sat'];
			$time_sun=$_POST['time_sun'];
			//echo $file_name=$_FILES['image']['name'];
			$con_no=$_POST['con_no'];
			$mob_no=$_POST['mob_no'];
			
			 //mob_no
           // $file_tmp=$_FILES['image']['tmp_name'];
		  //$aname=$title.".".explode(".",$file_name)[1];
         //  move_uploaded_file($file_tmp,"../images/Doctors/".$file_name);
			
			
	$sql="INSERT INTO clinics(d_id,name,address,location,timing_ms,timing_sun,contact_no,mobile_no) 
	VALUES('$docname','$name','$address','$location','$time_mon_sat','$time_sun','$con_no','$mob_no')";
     mysqli_Query($conn,$sql);
	 
	 
	      

     
	
	//header('Location:add_clinic.php');
	
	echo '<script type="text/javascript">                
              window.location = "../admin_clinic_add.php?" 
			 </script>';



?>