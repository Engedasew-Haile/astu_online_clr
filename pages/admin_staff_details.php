<?php  
session_start();  
if(!(isset($_SESSION['name']) and  $_SESSION['user_role']=="admin_staff"))
{  
 header("location:admin_staff.php");  
 	echo $error_msg = "Incorrect Email or Password!!!";
}
 ?>


	<?php 
	error_reporting(E_ALL);
//	session_start ();
	if (count($_POST) > 0)
	{
		if(!empty($_POST["agreed_btn"]))
		{	
			include_once '../astu_dbconnect.php';
			
			// validation error flags as false
			$errro = false;
			
			//check form is submitted  //check form is submitted  /// mysqli_real_escape_string = which case $connection will then be a handle, not an object
		//	$institution_name = mysqli_real_escape_string($conn, $_POST['institution_name']);
			$dept_name = mysqli_real_escape_string($conn, $_POST['dept_name']);
			$staff_position = mysqli_real_escape_string($conn, $_POST['staff_position']);
			
					
					// for chk dept name
			if ($dept_name == '')
				{
					$error = true;					
					$det_name_error = "Please select your department";
				}
					// for chk staff position
			if (!preg_match("/^[a-zA-Z ]+$/",$staff_position))
				{
					$error = true;					
					$staff_position_error = "Please specify your position";
				}
							
			
		$sql = "INSERT INTO user_details (dept_name, staff_position)
		
		VALUES 
		( '".$_POST ["dept_name"]."',
		  '".$_POST ["staff_position"]."')";
		  
		  mysqli_query($conn, $sql);
	$institution_name = mysqli_insert_id($conn);
	$successmsg = "Successfully Registered! <a href='../index.php'>Click here to Home</a>";
	
//	$sql->close();

// redirect user after delete is successful
header("Location: acad_staff.php");
$successmsg = "Successfully Registered! <a href='../index.php'>Click here to Home</a>";
//}

	
		  
		}
		
		else 
		{		
			$errormsg = "Error in registering...Please try again later!";
		}
	}
		
	
	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Adama Science and Technology University.
School of Electrical Engineering and Computing,

By
Engedasew Haile
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ASTU_Online-Clr-Sys</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" href="../layout/styles/regi-form.css" type="text/css" />
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
    <h3><a href="../index.php">Adama Science and Technology University</a></h3>
      <p>Adama, Ethiopia</p>
    </div>
	
    <div class="fl_right">
      <ul>
        <li class="last"></li>
			<li><a id="slideit" href="https://www.google.com/search">Search</a></li> 
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
      <li ><a href="../index.php">Home</a>
	   
		</li>
			<li><a href="task_list_4term_staff_clr.php">Task List</a>
		</li>
			<li class="active"><a href="admin_staff_details.php">Admin Staff Details</a>
		 <ul>        
          <?php
				if ( isset( $_SESSION[ 'name' ] ) ) {
					?>		
		<form  method="post" action="student.php">
          <li><a href="#">WelCome, <?php echo $_SESSION[ 'name' ];?></a></li>
		  <li><a href="#"><?php echo $_SESSION[ 'user_role' ]; ?></a></li>
		  
		  <li class="last"><a href="changePasskey.php">Change PassKey</a></li>

		</form>	
		<?php
			}
		?>
    <!--      <li class="last"><a href="admin_staff_details.php">&nbsp | &nbsp Please add your detail</a></li>   -->
        </ul>
		</li>
			<li><a href="about_us.php">About Us</a>
		</li>
			<li class="last"><a href="useful_links.php">Useful Links</a>
		</li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="wrapper col4">
  <div id="container">
    <div id="hpage">
	
	<div class="row">
		<div class="col-md-5 col-md-offset-3 well">
			<form role="form" action="" method="post" name="signupform">
				<fieldset>
			<legend> Adding User Detail</legend>
													<div class="form-group">
														<label for="name">Choose your Section:</label>

														<select name="dept_name" id="dept_name" class="form-control">
															<option value="">select your . . . </option>
															<option value="Finance & Acc. Dept.">Finance & Acc. Dept.</option>
															<option value="HR Manager">HR Manager</option>	
															<option value="HR Officer">HR Officer</option>					
															<option value="Immediate Supervisor">Immediate Supervisor</option> 
															<option value="Property control">Property control</option> 

																</select>				
																<span class="text-danger">
																	<?php if (isset($dept_name_error)) echo $dept_name_error; ?>
																</span>
															</div>
															<br>
																<div class="form-group">
																	<label for="name">Specify your position:</label> 
																	<input type="text" name="staff_position" placeholder="Please agree . . ." required value="" class="form-control" />
																	<span class="text-danger">
																		<?php if (isset($staff_position_error)) echo $staff_position_error; ?>
																	</span>
																</div>
																<div class="form-group">
																	<input type="submit" name="agreed_btn" value="I Agreed" class="btn btn-primary" />
																	<input type="reset" name="reset_user" id="reset_user" value="Reset" class="btn btn-primary"/>
																</div>
															</fieldset>
														</form>
														<span class="text-success" style="color:green;">
															<?php if (isset($successmsg)) { echo $successmsg; } ?>
														</span>
														<span class="text-danger">
															<?php if (isset($errormsg)) { echo $errormsg; } ?>
														</span>
													</div>
												</div>
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
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">ASTU_Online-Clr-Sys</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>