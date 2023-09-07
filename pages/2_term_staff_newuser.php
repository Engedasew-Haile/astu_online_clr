<?php
error_reporting(E_ALL);
/*	session_start ();
	if (isset($POST['signup']))
	{
	
	$f_name = $_POST ['name'];
	$id = $_POST ['id'];
	$user_role = $_POST ['user_role'];
	$email = $_POST ['email'];
	$userp_key = $_POST ['userp_key'];
	$cuserp_key = $_POST ['cuserp_key'];
	$cr_date = $POST [NOW()];
	
	include '../astu_dbconnect.php';


$query = "INSERT INTO user_basic_info 
(name, id, user_role, email, userp_key, cuserp_key, created_date)
VALUES 
('$name', '$id', '$user_role', '$email', '$userp_key', '$cuserp_key', NOW())";

	}
*/
//===============//==========
if (count($_POST)>0)
	{
		include ("../astu_dbconnect.php");
		$sql = "INSERT INTO user_basic_info 
		(name, id, user_role, email, 
		userp_key, cuserp_key)
		VALUES 
		('".$_POST["name"]."',' 
		  ".$_POST["id"]."',' 
		  ".$_POST["user_role"]."',' 
		  ".$_POST["email"]."','
		  ".$_POST["userp_key"]."',' 
		  ".$_POST["cuserp_key"]."','
		  ')";
		  
		  mysqli_query($conn,$sql);
		  $current_id = mysqli_insert_id($conn);
		  if(!empty($current_id))
		  {
			  $message = "Applicant add successfully ";
		  }
	}
	
	
//==============
/*
require '../astu_dbconnect.php';
if ($insert = $db->query("
INSERT INTO user_basic_info (name, id, user_role, email, userp_key, cuserp_key, created_date)
VALUES ('yoni', 'yoni/emp123', 'student', 'yahoo@yahoo.com', '12345696', '12345696', NOW())"))
{
	echo $db->affected_rows;
}	
*/
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
		
      </div>
   
	 <div id="slidbox">
    
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
			<li><a id="slideit" href="../index.php">Search</a></li> 
			<!-- <li><a href="user_detail.php">Add Detail</a></li> -->
			<li><a href="#">Log Out</a></li>
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
      <li class="active"><a href="../index.php">Home</a>
	    <ul>
        
          
          <li><a href="#">WelCome, Administrative Secretary</a></li>
          <li class="last"><a href="#">Mr. User Name</a></li>
		  
        </ul>
		</li>
			<li><a href="task_list.php">Task List</a>
		</li>
			<li class="active"><a href="term_staff_newuser.php">Adding New User</a>
		</li>
			<li><a href="#">About Us</a>
		</li>
			<li class="last"><a href="#">Useful Links</a>
		</li>
    </ul>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="" method="POST" name="signupform">
				<fieldset>
					<legend>Creating a user</legend>

					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" name="name" placeholder="Enter Full Name" required value="" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">ID #:</label>
						<input type="text" name="id" placeholder="Enter Your ID #" required value="" class="form-control" />
						<span class="text-danger"><?php if (isset($id_error)) echo $id_error; ?></span>
					</div>
															
					<div class="form-group">
						<label for="name">User Role:</label>
						<select name="user_role" id="user_role" class="form-control">
						<option value="0">Please select user role</option>
						<option value="admin_secr">Administrative Secretary</option>
					
						<option value="term_staff">Terminated Staff</option> 				
						</select>				
						<span class="text-danger"><?php if (isset($user_role_error)) echo $user_role_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Email:</label>
						<input type="text" name="email" placeholder="Email" required value="" class="form-control" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Password:</label>
						<input type="password" name="userp_key" placeholder="Password" required class="form-control" />
						<span class="text-danger"><?php if (isset($userp_key_error)) echo $userp_key_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Confirm Password</label>
						<input type="password" name="cuserp_key" placeholder="Confirm Password" required class="form-control" />
						<span class="text-danger"><?php if (isset($cuserp_key_error)) echo $cuserp_key_error; ?></span>
					</div>

					<div class="form-group">
						<input type="submit" name="submit" value="Sign Up" class="btn btn-primary" />
						<input type="reset" name="reset_user" id="reset_user" value="Reset" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		
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