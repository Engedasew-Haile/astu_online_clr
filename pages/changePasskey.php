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


<?php
   error_reporting(E_ALL);
     ini_set('display_errors', 1);
//session_start ();
include_once '../astu_dbconnect.php';

if(isset($_GET['id']))
{
	$id = $_GET ['id'];
	if (isset ($_POST ['change_passkey']))
		{
	//$name = ($_POST['name']);
	//$id = ($_POST['id']);
	//$user_role = ($_POST['user_role']);
	$email = ($_POST['email']);
	$userp_key = ($_POST['userp_key']);
	$cuserp_key = ($_POST['userp_key']);
	
$query_3 = mysqli_query($conn,"UPDATE user_basic_info SET email = '$email', 
userp_key='$userp_key', cuserp_key='$cuserp_key' WHERE id='$id'");


		//}
		$query_1 = mysqli_query($conn, "SELECT * FROM user_basic_info where id ='$id'");
		$query_2 = mysqli_fetch_array($query_1);
}
}
/*
if(isset($_POST['change_passkey']))
//if(count($_POST)>0)
{
	$email = isset($_GET['email']) ? $_GET['email']: '';
	
	$sql = "update user_basic_info set email = '".$_POST["email"]."',
	userp_key = '".$_POST["userp_key"]."',
	cuserp_key = '".$_POST["cuserp_key"]."'";
	
	mysqli_query($conn, $sql);
	$email = mysqli_insert_id($conn);
	$successmsg = "Record Modified Successfully! <a href='../index.php'>Click here to Home</a>";
	
}

$select_query = "(select from user_basic_info where email = '".$_GET['email']."')";
$result = mysqli_query($conn, $select_query);
$row = mysqli_fetch_array($result)

*/

/*	
if(count($_POST)>0) 
	{
		
	//==========//=========
	include_once '../astu_dbconnect.php';
	
	//set validation error flag as false
$error = false;

//check if form is submitted	
	//$name = mysqli_real_escape_string($conn, $_POST['name']);
	//$id = mysqli_real_escape_string($conn, $_POST['id']);
	//$user_role = mysqli_real_escape_string($conn, $_POST['user_role']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$userp_key = mysqli_real_escape_string($conn, $_POST['userp_key']);
	$cuserp_key = mysqli_real_escape_string($conn, $_POST['userp_key']);
	
	//name can contain only alpha characters and space
/*	if (!preg_match("/^[a-zA-Z ]+$/",$name))
		{
			$error = true;
			$name_error = "Name must contain only alphabets and space";
		}
*/
		
/*		
	if ($id === "" || $id < 8)	
		{
			$error = true;
			$id_error = "You entered ID # not correct or null <br>
						<t>Eg:- ASTU/stud/123 0R ASTU/stf/123";
		}
*/	
		/* to check user role selected*/
/*	if (($user_role != "admin_secr") || ($user_role != "admin_staff") || ($user_role != "term_staff" ))
	//if ($user_role === 0)
		{
			$error = true;
			$user_role = "User role not selected";
		}
			
*/
		 /*to check Valid e-Mail Address */
/*	if (!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error = true;
			$email_error = "Please Enter Valid e-Mail Address";			
		}	
*/		
		/*password must be than 6 char*/
/*	if (strlen($userp_key) < 3 ) 
		{
			$error = true;
			$userp_key_error = "Password must be than 6 characters"; 
		}
		
	 /* Password Matching Validation */
/*	 
	if($_POST["userp_key"] != $_POST["cuserp_key"])
		{ 
			$error = true;
			$cuserp_key_error = "Password and Confirm Password doesn't match"; 
		}

//if ($error = 0) {
			$sql = "update user_basic_info (email, userp_key, cuserp_key) 
			
	VALUES 
	('" . $_POST["email"] . "',
	 '" .md5($_POST["userp_key"]) . "', 
	 '" .md5($_POST["cuserp_key"]). "',	  
	 '" . $_POST = "NOW()". "')"; //))
	 
	 
	 
	 /* MD5 stands for = Message Digest algorithm 5,
	 is the hashing algorithm for data security, and also
	 initially designed to be used as a cryptographic hash function*/
/*	 
	mysqli_query($conn, $sql);
	$email = mysqli_insert_id($conn);
	$successmsg = "Record Modified Successfully! <a href='../index.php'>Click here to Home</a>";
	 
	//}
	 
	
	}
	
	$select_query = "SELECT * FROM user_basic_info WHERE email='" . $_GET["email"] . "'";
$result = mysqli_query($sql,$select_query);
$row = mysqli_fetch_array($result);
	
	
	
	
	/* Form Required Field Validation */

/*	
if (!empty($_POST["signup"]))
{
	foreach ($_POST as $key => $value)
	{
		if(empty($_POST[$key]))
		{
			$error_message = "All fields are . . .";
			break;
		}
	}
	/* Password Matching Validation */
	/*
if($_POST['userp_key'] != $_POST['cuserp_key'])
	{
		$error_message = 'password should be same<br>';
	}	
	else {
			$error_message = "Problem in updating Try Again!";	
		}
}

*/


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
      <div class="topbox last">
<!---===============-->
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
        <li class="left">Read Here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel"> ASTU Onclr  </a>
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
			<li><a id="slideit" href="https://www.google.com.et/">Search</a></li> 
			
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
      <li class="active"><a href="../index.php">Home</a>
	    <ul>     
    <?php
				if ( isset( $_SESSION[ 'name' ] ) ) {
					?>		
		<form  method="post" action="student.php">
          <li><a href="#">WelCome, <?php echo $_SESSION[ 'name' ];?></a></li>
		  <li><a href="#"><?php echo $_SESSION[ 'user_role' ]; ?></a></li>
		  
		  <li><a href="changePasskey.php">Change PassKey</a></li>
       
				</form>
				<?php
				}
				?>		  
        </ul>
		</li>
		
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
			<form role="form" action="" method="post">
				<fieldset>
					<legend>Changing User . . .</legend>
		<!--
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
						
						<option value="0">Please Select a user</option>
						<option value="acad_staff">Academics Staff</option>	
						<option value="regi_assis">Registrar Assistant</option>	
						<option value="student">Student</option>					
					
						</select>				
						<span class="text-danger"><?php if (isset($user_role_error)) echo $user_role_error; ?></span>
					</div>
					
					
					<br /><b>Notice</b>:  Undefined index: email in <b>C:\xampp\htdocs\astu_online_clr\pages\changePasskey.php</b> on line <b>324</b><br /> 
				-->	
				
		
		
					<div class="form-group">
						<label for="name">Email:</label>
						<input type="text" name="email" placeholder="Email" required value="<?php echo $_GET['email'];?> "class="form-control" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>
			
					<div class="form-group">
						<label for="name">Password:</label>
						<input type="text" name="userp_key" value="<?php echo $_GET['userp_key'];?>" required class="form-control" />
						<span class="text-danger"><?php if (isset($userp_key_error)) echo $userp_key_error; ?></span>
					</div>
			
					<div class="form-group">
						<label for="name">Confirm Password</label>
						<input type="text" name="cuserp_key" value="<?php echo $GET['cuserp_key']; ?>" required class="form-control" />
						<span class="text-danger"><?php if (isset($cuserp_key_error)) echo $cuserp_key_error; ?></span>
					</div>

					<div class="form-group">
						<input type="submit" name="change_passkey" value="Save Change" class="btn btn-primary" />
						<input type="reset" name="reset_user" id="reset_user" value="Reset" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="message"><?php if(isset($message)) { echo $message; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
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