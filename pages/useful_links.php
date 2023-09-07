<?php  
session_start();  
if(!(isset($_SESSION['name']) and  
       $_SESSION['user_role']=="acad_staff" 
	|| $_SESSION['user_role']=="admin_secr"
	|| $_SESSION['user_role']=="admin_staff"
	|| $_SESSION['user_role']=="regi_assis"
	|| $_SESSION['user_role']=="student"
	|| $_SESSION['user_role']=="system_admin"
	|| $_SESSION['user_role']=="library"
	|| $_SESSION['user_role']=="term_staff"))
{  
 header("location:../index.php");  
 	echo $error_msg = "Incorrect Email or Password!!!";
}
 ?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Adama Science and Technology University.
School of Electrical Engineering and Computing,
Department of Computing
Graduate Class Of 2017
By
1. Afiyat Jemal Ext.Cs/2414/06
2. Aynalem Fantahun Ext.Cs/8361/05
3. Bizuayhu Abera Ext.Cs/2435/06
4. Engedasew Haile Ext.Cs/4815/05
5. Gebi Hule Ext.Cs/8311/05
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ASTU_Online-Clr-Sys</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
	  
        <h2>INTRODUCTION</h2>
		
         <p>Adama Science and Technology University(ASTU) is found in Adama city, region of Oromia. 100Km far from Addis. 
		ASTU former name was Adama-TVET which was established in 1987EC. 
		ASTU became as a university in 1996EC. 
		It is one of known higher institution in the country due to the ability to hold more than thousands students at this time and many facilities. . . Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. 
		Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. 
		Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.
		</p>
		
       <!-- <p class="readmore"><a href="#">Continue Reading &raquo;</a></p> -->
      </div>
   
	  <div id="slidbox">
      <div class="topbox last">
     <!--   <h2>Please Login Here</h2>
        <form action="#" method="post">
          <fieldset>
         
            <label for="user_name">Username:
              <input type="text" name="user_name" id="user_name" value="" />
            </label>
            <label for="userp_key">Password:
              <input type="password" name="userp_key" id="userp_key" value="" />
            </label>
            <label for="remember_user">
              <input class="checkbox" type="checkbox" name="remember_user" id="remember_user" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="login_user" id="login_user" value="Login" />
              &nbsp;
              <input type="reset" name="reset_user" id="reset_user" value="Reset" />
			  &nbsp;
    <!--       <input type="submit" name="add_user" id="add_user"  value="Add User"/> 		-->
            </p>
          </fieldset>
        </form>
      </div>
	  
	  <div id="slidboxtxt">
	   <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. 
		Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. 
		Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.
		<br>
		<br>
		Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. 
		Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. 
		Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.
		<br>
		<br>
		Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. 
		Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. 
		Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
		</div>
      <br class="clear" />
	  </div>	  
    </div>
	
    <div id="loginpanel">
      <ul>
        <li class="left">Read here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel"> ASTU Online Clr </a>
		<a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
  
    <div id="logo">
    <h3><a href="../index.php">Adama Science and Technology University</a></h3>
      <p>Adama, Ethiopia</p>
    </div>
	
    <div class="fl_right">
  <ul>
        <li class="last"></li>
			<li><a id="slideit" href="../index.php">Search</a></li> 
			<!-- <li><a href="user_detail.php">Add Detail</a></li> -->
			<li><a href="log_out.php">Log Out</a></li>
      </ul>
      <p>Tel: Tel: +251-123-456 | Mail: info@astu-clr.edu.et</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topnav">
    <ul>
      <li><a href="../index.php">Home</a>
		</li>
	
		</li>
			<li ><a href="astu_events.php">ASTU Events</a>
		</li>
			<li><a href="about_us.php">About Us</a>
		</li>
			<li class="active"><a href="useful_links.html">Useful Links</a>
			  <ul>        
          <?php
				if ( isset( $_SESSION[ 'name' ] ) ) {
					?>		
		<form  method="post" action="">
          <li><a href="#">WelCome, <?php echo $_SESSION[ 'name' ];?></a></li>
		  <li><a href="#"><?php echo $_SESSION[ 'user_role' ]; ?></a></li>
		  
	<!--	  <li class="last"><a href="changePasskey.php">Change PassKey</a></li> -->

		</form>	
		<?php
			}
		?>
				
        </ul>
		</li>
    </ul>
  </div>
</div>


<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">

    <div id="hpage">
      <ul>
			<h2>Things have been done in ASTU, in different time.</h2>
        <li> 
			<div class="imgholder"><a href="#"><img src="images/img (1)-.jpg" alt="" /></a></div>
			<p>Now a days Information Communication Technologies (ICT) provides modern communication fashion. 
			It is a backbone activities presented on a platform by many organizations . . .
		  .</p>
        </li>
        <li>
          
        <div class="imgholder"><a href="#"><img src="images/img (2).jpg" alt="" /></a></div>
          <p>for their objective and is a fundamental tool for any one. 
		  its provide better way to facilitate, important to improve efficiency of service, giving effective and higher quality of services.
		  </p>
        </li>
        <li>
          
		<div class="imgholder"><a href="#"><img src="images/001 (1).jpg" alt="" /></a></div>
          <p>It is the current issue for verifying and managing any activities. 
		  So, for their such things and a being subject strongly (Student and Admin Staff) . . .
		  </p>          
        </li>
        <li class="last">
          
          <div class="imgholder"><a href="#"><img src="images/001 (6).jpg" alt="" /></a></div>
          <p>So, the scope and the boundary of the system have been clearly defined by the services that are mentioned above. 
		  But, the ASTU provides additional student and Admin staff . . . 
		  </p>
         </li>
      </ul>
      <br class="clear" />
    </div>
	
	
	
	
	
		    <div id="column">
      <div class="subnav">
	  
	  
        <h2>Different Section In ASTU</h2>
        <ul>
          <li><a href="#">Office Of Registrar</a></li>
          <li><a href="#">Academic Departments</a>
            <ul>
              <li><a href="#">School Of Electrical and Computing</a></li>
              <li><a href="#">School Of Mathematics and Statistics</a></li>
			  <li><a href="#">School Of Civil Engineering</a></li>
              <li><a href="#">School Of Chemical Engineering</a></li>
            </ul>
          </li>
          <li><a href="#">Administration Office</a>
            <ul>
              <li><a href="#">Human Resource Administration</a></li>
              <li><a href="#">Finance and Accounting Dept</a>
                <ul>
                  <li><a href="#">Compound Service</a></li>
                  <li><a href="#">Information and Technology</a></li>
                </ul>
              </li>
            </ul>
          </li>
		  <li><a href="#">Library</a></li>
          <li><a href="#">Student Affairs</a></li>
        </ul>
      </div>
	  
      
      
    </div>
    <div class="clear"></div>
  </div>
</div>
  </div>
</div>
<!-- ####################################################################################################### -->
 
<div class="wrapper col5">
	<div id="footer">
    
      <h2>Stay In Reading News!</h2>
        
          <p>
		 This project work is to develop a computer based online clearance for doing clear for graduating students and admin-staff of ASTU. Like any other system, the proposed web-based system has also its own functional scope, focuses on replacing the current manual system into a web-based computerized system and eliminating the problems caused by the manual system in the process. We can better illustrate the scope of the proposed web-based system by listing the services it will provide. Therefore, the scope of this project is focused on design and developing computer based online Clearance system for ASTU.  
    </div>
    <br class="clear" />
  </div>
</div> 
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">ASTU_Online-Clr-Sys</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>