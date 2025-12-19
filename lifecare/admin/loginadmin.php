<?php
if(isset($_POST['btn_login']))
{
require('./comnpages/config.php');

$email=$_POST['email'];
$password=$_POST['pass'];
//$user_id=$_POST['user_id'];

echo $sql="SELECT * FROM tbl_logindetails WHERE user_email='$email' AND user_pass='$password' AND user_type=3 ";
	
$data=mysqli_query($conn,$sql);  
	
   if(mysqli_num_rows($data)>0)
	{	

         session_start();
		 
		 $row=mysqli_fetch_array($data);
		 
		 $_SESSION['user_id']=$row['user_id'];
		 $_SESSION['user_type']=3;
		 
		header('Location:index.php');
	//}
	//else
	//{
	//header('Location:testlogin.php?error=invalidUSER');
	}else{
		echo '<script type="text/javascript">
	window.location="./login.php?user_name_password_do_not_match";	
	</script>';

	}
}else{
	echo '<script type="text/javascript">
	window.location="../index.php?invalidUSER";	
	</script>';
}
	
	
	 
?>   