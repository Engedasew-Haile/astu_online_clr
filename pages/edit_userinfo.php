<?php  
session_start();  
if(!(isset($_SESSION['name']) and        
	 $_SESSION['user_role']=="admin_secr"
	|| $_SESSION['user_role']=="regi_assis"
	|| $_SESSION['user_role']=="system_admin"))
{  
 header("location:../index.php");  
 	echo $error_msg = "Incorrect Email or Password!!!";
}
 ?> 

<?php  
include_once '../astu_dbconnect.php';
if(isset($_GET['id']))
{
	$id = $_GET ['id'];
	if (isset ($_POST ['save_change']))
		{
	$name = ($_POST['name']);
	$id = ($_POST['id']);
	$user_role = ($_POST['user_role']);
	$email = ($_POST['email']);
	$userp_key = ($_POST['userp_key']);
//	$cuserp_key = ($_POST['userp_key']);
	
	$query_3 = mysqli_query($conn,"UPDATE user_basic_info SET name='$name', 
	user_role = '$user_role', email = '$email', userp_key='$userp_key' WHERE id='$id'");
	
		if($query_3)
			{
	header('location:up_del_4admi_2.php');
			}
	}

		$query_1 = mysqli_query($conn, "SELECT * FROM user_basic_info where id ='$id'");
		$query_2 = mysqli_fetch_array($query_1);

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
		
       
      </div>
   
	  <div id="slidbox">
      <div class="topbox last">
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
			<li><a id="slideit" href="https://www.google.com/search?">Search</a></li> 
			
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
	  <!--   <ul> 
		   <li><a href="#">WelCome, System Administrator</a></li>
          <li><a href="#">Mr. User Name</a></li>
		  <li><a href="system_admin_newuser.php">Add New User</a></li>
		  <li><a href="up_del_4admi_2.php">List</a></li>
		
        </ul> 
	-->

	   <ul>     
		<?php
				if ( isset( $_SESSION[ 'name' ] ) ) {
					?>		
		<form  method="post" action="student.php">
          <li><a href="#">WelCome, <?php echo $_SESSION[ 'name' ];?></a></li>
		  <li><a href="#"><?php echo $_SESSION[ 'user_role' ]; ?></a></li>
		
				</form>
				<?php
				}
				?>		  
				<li><a href="up_del_4admi_2.php">List</a></li>
        </ul>
		</li>
			<li><a href="task_list.php">Task List</a>
	<!--	</li>
			<li ><a href="system_admin_newuser.php">Adding New User</a>
		</li>	
	-->	
    </ul>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    

<div class="topbox last">
	<div class="row">
		<div class="col-md-5 col-md-offset-3 well">
			<form role="form" action="" method="post" name="signupform">
				<fieldset>
					<legend>Creating a user</legend>

					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" name="name" placeholder="Enter Full Name" required value="<?php echo $_GET['name'];?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">ID #:</label>
						<input type="text" readonly="readonly" name="id" placeholder="Enter Your ID #" required value="<?php echo $_GET['id'];?>" class="form-control" />
						<span class="text-danger"><?php if (isset($id_error)) echo $id_error; ?></span>
					</div>
															
					<div class="form-group">
						<label for="name">User Role:</label>								
						<select name="user_role" id="user_role" class="form-control">
						<option value="">Please select new one</option>	
						<option value="acad_staff">Academics Staff</option>						
						<option value="admin_secr">Administrative Secretary</option>
						<option value="admin_staff">Administrative Staff</option>
						<option value="regi_assis">Registrar Assistant</option>
						<option value="student">Student</option>
						<option value="system_admin">System Administrator</option>
						<option value="term_staff">Terminated Staff</option> 				
						</select>				
						<span class="text-danger"><?php if (isset($user_role_error)) echo $user_role_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Email:</label>
						<input type="text" name="email" placeholder="Email" required value="<?php echo $_GET['email'];?>" class="form-control" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Password:</label>
						<input type="password" name="userp_key" placeholder="Password" value="<?php echo $_GET['userp_key'];?>" required class="form-control" />
						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
					</div>

				<!--	<div class="form-group">
						<label for="name">Confirm Password</label>
						<input type="password" name="cuserp_key" placeholder="Confirm Password" value="<?php echo $_GET['cuserp_key'];?>" required class="form-control" />
						<span class="text-danger"><?php if (isset($cuserp_key_error)) echo $cuserp_key_error; ?></span>
					</div>
				-->	
					<div class="form-group">
						<input type="submit" name="save_change" value="Save Change" class="btn btn-primary" />
					<!--	<input type="reset" name="reset_user" value="Reset" class="btn btn-primary" />		-->
				
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