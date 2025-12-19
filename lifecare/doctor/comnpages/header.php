<header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">  <span class="lite">Doctor</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

			
	<?php 						
				@session_start();
//include "dbconfigure.php";

$emailid5 = $_SESSION['semailid'];
$query5 = "select * from doctor_list where emailid='$emailid5'";
$rs5 = my_select($query5);
if($row5 = mysqli_fetch_array($rs5))
{
$doctorname5 = $row5[1];

$image5 = $row5[2];
$path5 = "../".$image5;
}
				
			?>			
			
			
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?=$path5?>" width=35 height=35>
                            </span>
                            <span class="username"><?=ucwords($doctorname5);?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            
                            <li>
                                <a href="./logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           
                            <li>
                                <a href="./changePassword.php"><i class="icon_key_alt"></i> Change Password</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      