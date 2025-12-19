<?php
require('./comnpages/config.php');
            if(isset($_POST['btn_reg']))
			{
	        $fbname=$_POST['name'];
			$fbphone =$_POST['phone'];
			$fbemail =$_POST['email'];
			$fbsubject =$_POST['subject'];
			$fbmessage  =$_POST['message'];
			
	echo $sql="INSERT INTO tbl_feedback(fbname,fbphone,fbemail,fbsubject,fbmessage) 
	VALUES ('$fbname','$fbphone','$fbemail','$fbsubject','$fbmessage')";				
	$result=mysqli_query($conn,$sql);
	
	header('Location:contact.php');
			}
	/*if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "./Loan.php?sucess=111"; 
			  </script>';
	}
	else{
		echo '<script type="text/javascript">                
                window.location = "./addLoan.php?error=111"; 
			  </script>';
	}*/
	else{
		echo"error";
	}


?>