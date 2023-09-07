
<?php  
session_start();  
if(!(isset($_SESSION['name']) and  
       $_SESSION['user_role']=="acad_staff" 
	|| $_SESSION['user_role']=="admin_secr"
	|| $_SESSION['user_role']=="admin_staff"
	|| $_SESSION['user_role']=="regi_assis"
	|| $_SESSION['user_role']=="library"))
{  
 header("location:../index.php");  
 	echo $error_msg = "Incorrect Email or Password!!!";
}
 ?> 

<?php
error_reporting(E_ALL);
include_once '../astu_dbconnect.php';
if (isset($_POST['add_borrower']))
	{
	$mat_id = ($_POST['mat_id']);	
	$mat_name = ($_POST['mat_name']);
	$mat_quantity = ($_POST['mat_quantity']);
	$mat_user_id = ($_POST['mat_user_id']);
//	$borrowed_date = ($_POST['borrowed_date']);
//	$mat_status = ($_POST['mat_status']);
//	$cuserp_key = ($_POST['userp_key']);
		
		
		$query_3 = "INSERT INTO astu_materials (mat_id, mat_name, mat_quantity, mat_user_id) 
			
	VALUES 
	('" . $_POST["mat_id"] . "',
	 '" . $_POST["mat_name"] . "',
	 '" . $_POST["mat_quantity"] . "',
	 '" . $_POST["mat_user_id"] . "',	
	)"; 
		
		
		
		mysqli_query($conn, $query_3);
	$sql = mysqli_insert_id($conn);
	$successmsg = "Successfully Registered! <a href='up_del_4admi_2.php'>Click here to List</a>";
		
	

		
	}
//print_r($_POST);
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
	    	    <ul>     
    <?php
				if ( isset( $_SESSION[ 'name' ] ) ) {
					?>		
		<form  method="post" action="student.php">
          <li><a href="#">WelCome, <?php echo $_SESSION[ 'name' ];?></a></li>
		  <li><a href="#"><?php echo $_SESSION[ 'user_role' ]; ?></a></li>
		  
	<!--	  <li><a href="changePasskey.php">Change PassKey</a></li> -->
       
				</form>
				<?php
				}
				?>		  
   
		  <li><a href="mat_borrowing.php">Adding Material User</a></li>

        </ul>
		</li>
			<li><a href="task_list.php">Task List</a>
	<!--	</li>
			<li class="active"><a href="mat_borrowing.php">Adding New User</a>
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
			<form role="form" action="mat_borrowing.php" method="post" name="signupform">
				<fieldset>
					<legend>Materials Borrowing Page</legend>

					<div class="form-group">
						<label for="name">Material Name:</label>
						<input type="text" name="mat_name" placeholder="Materials Name" required value="" class="form-control" />
						<span class="text-danger"><?php if (isset($mat_name_error)) echo $mat_name_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Material ID #:</label>
						<input type="text" name="mat_id" placeholder="Materials ID #" required value="" class="form-control" />
						<span class="text-danger"><?php if (isset($mat_id_error)) echo $mat_id_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Material Quantity:</label>
						<input type="text" name="mat_quantity" placeholder="Materials Quantity" required value="" class="form-control" />
						<span class="text-danger"><?php if (isset($mat_quantity_error)) echo $mat_quantity_error; ?></span>
					</div>
			<!--												
					<div class="form-group">
						<label for="name">Material User Type:</label>
						<select name="user_role" id="user_role" class="form-control">
						<option value="">Select Material user</option>
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
			-->		
					<div class="form-group">
						<label for="name">Material User ID #:</label>
						<input type="text" name="mat_user_id" placeholder="Materials user ID #" required value="" class="form-control" />
						<span class="text-danger"><?php if (isset($mat_user_id_error)) echo $mat_user_id_error; ?></span>
					</div>
				
					
					
					<div class="form-group">
						<input type="submit" name="add_borrower" value="Add Borrower" class="btn btn-primary" />
						<input type="reset" name="reset_user" value="Reset" class="btn btn-primary" />		
				
					</div>
				</fieldset>
			</form>
			<span class="text-success" style="color:green;"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
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