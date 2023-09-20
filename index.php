


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

error_reporting(E_ALL);
	session_start ();
	
		if (isset ($_POST['log_out']))
			{
				session_unset();
			}
		if (isset ($_POST['submit']))
		{
		include_once ('astu_dbconnect.php');  
		
		/*  include = tell PHP to fetch a particular file and load all its contents. It’s
			as if you pasted the included file into the current file at the insertion point
		
			include_once = it includes the requested file again, even if
			you’ve already inserted it.
		 */	
		 
			$useremail = $_POST ['email'];
			$password = $_POST ['userp_key'];
			
			$query = "SELECT * FROM user_basic_info WHERE email='".$useremail."' and userp_key='".$password."'";
			
			$result = mysqli_query ($conn, $query);
			if (mysqli_num_rows($result) > 0 )
				{
					$row = mysqli_fetch_array ($result);
					//$_SESSION ['username'] = $row ['name'];
					$_SESSION ['useremail'] = $row ['email'];
					$_SESSION ['password'] = $row ['userp_key']; 
					$_SESSION ['user_role'] = $row ['user_role'];
					$_SESSION ['name'] = $row ['name'];

					
					session_write_close();
					if ($_SESSION ['user_role'] == "admin_secr")
						{
							header ('Location: http://localhost:8100/astu_online_clr/pages/admin_secr.php');
						}
						else if ($_SESSION ['user_role'] == "regi_assis")
						{
							header ('Location: http://localhost:8100/astu_online_clr/pages/regi_assis.php');
						}
						else if ($_SESSION ['user_role'] == "student")
						{
							header ('Location: http://localhost:8100/astu_online_clr/pages/student.php');
						}
						else if ($_SESSION ['user_role'] == "system_admin")
						{
							header ('Location: http://localhost:8100/astu_online_clr/pages/system_admin.php');
						}
						else if ($_SESSION ['user_role'] == "term_staff")
						{
							header ('Location:  http://localhost:8100/astu_online_clr/pages/term_staff.php');
						}
						
						else if ($_SESSION ['user_role'] == "acad_staff")
						{
							header ('Location:  http://localhost:8100/astu_online_clr/pages/acad_staff.php');
						}
					
						else if ($_SESSION ['user_role'] == "admin_staff")
						{
							header ('Location:  http://localhost:8100/astu_online_clr/pages/admin_staff.php');
						}
						else if ($_SESSION ['user_role'] == "library")
						{
							header ('Location:  http://localhost:8100/astu_online_clr/pages/library.php');
						}
							//exit();
						else {
					$error_msg = "Incorrect Email or Password!!!";
							}					
				}
						
							
					
		}
	
        
?>


<!--#############################################-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ASTU_Online-Clr-Sys</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" href="../layout/styles/regi-form.css" type="text/css" /> 
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.tabs.setup.js"></script>

</head>
<body>
<div class="wrapper col0">
  <div id="topbar" >
    <div id="slidepanel">
      <div class="topbox">
        <h2>INTRODUCTION</h2>
		
        <p>Adama Science and Technology University(ASTU) is found in Adama city, region of Oromia. 100Km far from Addis. 
		ASTU former name was Adama-TVET which was established in 1987EC. 
		ASTU became as a university in 1996EC. 
		
		</p>
		
      
      </div>
   
	  <div id="slidbox">
      <div class="topbox last">
        <h2>Please Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Please Login Here</legend> <!--Teachers Login Form-->
            <label for="email">Your Email:
              <input type="text" name="email" id="email" value="" />
            </label>
            <label for="userp_key">Password:
              <input type="password" name="userp_key" id="userp_key" value="" />
            </label>
            <label for="remember_user">
              <input class="checkbox" type="checkbox" name="remember_user" id="remember_user" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="submit" id="login_user" value="Login" />
              &nbsp;
              <input type="reset" name="reset_user" id="reset_user" value="Reset" />
			  &nbsp;
        
            </p>
          </fieldset>
        </form>
      </div>
	  
	  <div id="slidboxtxt">
	  <p>It is one of known higher institution in the country due to the ability to hold more than
	thousands students at this time and many facilities. Nowadays so many activities have been done with in
	campus manually. From these activates, student and Admin-Staff clearance process, is the one which is
	undertaken in order to make the both clear from any university’s property or tangible possession that is owned
	by someone.
		<br>
		<br>
		Clearance is a status of granted individuals, typically members of some organization such as Employees 
		of private or Government organization, University graduates or failure student and others, allowing them 
		access to confidential information, a clearance by itself is normally not sufficient to gain access.
		<br>
		<br>
		The organization must determine that the clearance individual has a “need to know” the information. 
		Clearance is the process of determining and negotiating any permission that are needed to clear use of someone else’s.</p>
		</div>
      <br class="clear" />
	  </div>	  
    </div>
	
    <div id="loginpanel">
      <ul>
        <li class="left">Log In Here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel"> Please Dear </a>
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
	  <!--login error-->
      <h3><a href="index.php">Adama Science and Technology University</a></h3>
      <p>Adama, Ethiopia </p>
    </div>
	
	<div class="fl_right">
       <ul>
			<li class="last"></li>
		
			<li><a href="https://www.google.com/search?">Search</a></li>
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
			<li class="active"><a href="index.php">Home</a>
			
			 <ul>        
    <!--  <li><a href="#"><span class="text-danger"><?php if (isset($error_msg)) { echo '$error_msg'; } ?>forget ur pk</span> </a></li>
          <li ><a href="#">forget</a></li>		
		
	-->		
	<!--		      
          <?php
				if ( isset( $_SESSION[ 'name' ] ) ) {
					?>		
		<form  method="post" action="student.php">
          <li><a href="#">WelCome, <?php echo $_SESSION[ 'user_role' ];?></a></li>
		  <li><a href="#"><?php echo $_SESSION[ 'name' ]; ?></a></li>
		  
		  <li><a href="pages/log_out.php">Log Out</a></li>
		  
	

		</form>	
		<?php
			}
		?>
	-->			
        </ul>		       
		</li>
		
		<li><a href="pages/astu_events.php">ASTU Events</a>
      </li>
			<li><a href="pages/about_us.php">About Us</a></li>
			<li class="last"><a href="pages/useful_links.php">Useful Links</a>
	  </li>
	  <!--<marquee id#="hometext" scrolldelay="100 style="color:yellow;text-align:bottom;font-size:17px;padding:10px"> 
		Adama Science and Technology University, Online Clearance System For Graduated Student's and Terminated Staff.</marquee> -->
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
    <p class="fl_left">Copyright &copy; <?php echo date('Y'); ?> - All Rights Reserved - <a href="#">ASTU_Online-Clr-Sys</a></p>
    <br class="clear" />
	<p class="f1_left"> By:- Engedasew Haile, ALX-Holberton-Software-Engineering Student
		<ul>
		<li><a href="https://github.com/Engedasew-Haile/astu_online_clr.git">Github:</a><br></li>
		<li><a href="https://www.linkedin.com/in/engedasew-haile-1306a193/">LinkedIn:</a><br></li>
		<li><a href="https://twitter.com/abulecisco">Twitter profile:</a></li>
		</ul>
	</p>
  </div>
</div>
</body>
</html>