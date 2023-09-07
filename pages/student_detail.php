<?php  
session_start();  
if(!(isset($_SESSION['name']) and $_SESSION['user_role']=="student"))
{  
 header("location:../index.php");  
 	echo $error_msg = "Incorrect Email or Password!!!";
}
 ?> 

<?php
	
error_reporting(E_ALL);

include_once '../astu_dbconnect.php';
if (isset ($_POST['add_details']))
	{
		
	$sex = ($_POST['sex']);
	$dept_name= ($_POST['dept_name']);
	$entry_year = ($_POST['entry_year']);
	$acad_year = ($_POST['acad_year']);
	$year_circ = ($_POST['year_circ']);
	$semester = ($_POST['semester']);
	$prog_type = ($_POST['prog_type']);
	$reason_4clr = ($_POST['reason_4clr']);
	$phone_num = ($_POST['phone_num']);
		
		
		$sql = "INSERT INTO user_details (sex, dept_name, entry_year, acad_year, year_circ, semester, prog_type, reason_4clr, phone_num) 
			
	VALUES 
	('" . $_POST["sex"] . "',
	 '" . $_POST["dept_name"] . "',
	 '" . $_POST["entry_year"] . "',
	 '" . $_POST["acad_year"] . "',	
	 '" . $_POST["year_circ"]. "',	  
	 '" . $_POST["semester"]. "',	  
	 '" . $_POST["prog_type"]. "',	  
	 '" . $_POST["reason_4clr"]. "',	  
	 '" . $_POST["phone_num"] . "')"; 
		
		
		 mysqli_query($conn, $sql);
	
			if($sql)
			{
	header('location:student.php');
	$successmsg = "Successfully Registered! <a href='up_del_4admi_2.php'>Click here to List</a>";
			}
	}

		
	/*	
		mysqli_query($conn, $query);
	$id = mysqli_insert_id($conn);
	$successmsg = "Successfully Registered! <a href='up_del_4admi_2.php'>Click here to List</a>";
	*/	
	//	print_r($_POST);

		
//	}

	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Adama Science and Technology University.
School of Electrical Engineering and Computing,

By
Engedasew Haile Ext.Cs/4815/05

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
	<!--		<li><a href="user_detail.php">Add Detail</a></li> 		-->
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
		<li><a href="clr_status_4stud.php">Clearance Status</a>		
		</li>
			<li class="active"><a href="student_detail.php">Adding Detail</a>
		</li>
		<!--	<li><a href="#"></a>		-->
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
					<legend>User Detail Registration</legend>
					
					<div class="form-group">
						<label for="name">Sex:</label>
						<select name="sex" id="sex" class="form-control">	
						<option value="">Please, select your sex</option>
						<option value="Male" <?php if(isset($_POST['sex']) && $_POST['sex']=="Male") { ?>checked<?php  } ?>>Male</option>
						<option value="Female" <?php if(isset($_POST['sex']) && $_POST['sex']=="Female") { ?>checked<?php  } ?>>Female</option>
					<!--	<option value="other">Other</option>			-->
						</select>				
						<span class="text-danger"><?php if (isset($sex_error)) echo $sex_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Department:</label>
						<select name="dept_name" id="stud_dept" class="form-control" style="">
						<option value="">---select your department---</option>
						<option value="Computing">Computing</option>
						<option value="Civil Engineering">Civil Engineering</option>
						<option value="Electrical Engineering">Electrical</option>
						<option value="Mechanical Engineering">Mechanical Engineering</option> 				
						<option value="Other Departments">Other Departments</option> 
						</select>	
						<span class="text-danger"><?php if (isset($dept_error)) echo $dept_error; ?></span>
					</div>
									

					<div class="form-group">
						<label for="name">Entry Year:</label>
						<input type="text" name="entry_year" placeholder="Enter Your Year Of Entry" required value="" class="form-control" />
						<span class="text-danger"><?php if (isset($entry_year_error)) echo $entry_year_error; ?></span>
					</div>
								
					<div class="form-group">
						<label for="name">Academic Year:</label>
						<input type="text" name="acad_year" placeholder="Enter Your Year Of Academic" required value="" class="form-control" />
						<span class="text-danger"><?php if (isset($acad_year_error)) echo $acad_year_error; ?></span>
					</div>
															
					<div class="form-group">
						<label for="name">Year (Circle One):</label>
						<select name="year_circ" id="year_circ" class="form-control">
						<option value="">Please, select a year</option>
						<option value="1st Year">1st Year</option>
						<option value="2nd Year">2nd Year</option>
						<option value="3rd Year">3rd Year</option>
						<option value="4th Year">4th Year</option> 				
						<option value="5th Year">5th Year</option> 
						</select>				
						<span class="text-danger"><?php if (isset($year_circ_error)) echo $year_circ_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Semester:</label>
						<select name="semester" id="semester" class="form-control">
						<option value="">Please, select a semester</option>
						<option value="I Semester">I Semester</option>
						<option value="II Semester">II Semester</option>
						<option value="III Semester">III Semester</option>						 
						</select>				
						<span class="text-danger"><?php if (isset($semester_error)) echo $semester_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Program Type:</label>
						<select name="prog_type" id="prog_type" class="form-control">
						<option value="">Please, select your program type</option>
						<option value="Regular Undergraduate">Regular Undergraduate </option>
						<option value="Extension">Extension</option>
						<option value="Postgraduate">Postgraduate</option>						 
						</select>				
						<span class="text-danger"><?php if (isset($prog_type_error)) echo $prog_type_error; ?></span>
					</div>
					
					<div class="form-group" >
						<label for="name" >Reason For Clearance: <br>
						&nbsp; &nbsp; are you graduate class? &nbsp; </label> <br>
					    Yes, Graduate Class&nbsp;
						<input type="radio" name="reason_4clr" value="Yes, Graduate class" id="reason_4clr" <?php if(isset($_POST['reason_4clr']) && $_POST['reason_4clr']=="Yes, Graduate class") { ?>checked<?php  } ?>> <br>
						&nbsp; 
						No, End Of Academic Year&nbsp;
						<input type="radio"  name="reason_4clr" value="No, End Of Academic Year" id="reason_4clr" <?php if(isset($_POST['reason_4clr']) && $_POST['reason_4clr']=="No, End Of Academic Year") { ?>checked<?php  } ?>> <br>	
						&nbsp; 
						No, Withdrawal&nbsp; 
						<input type="radio"  name="reason_4clr" value="No, Withdrawal" id="reason_4clr" <?php if(isset($_POST['reason_4clr']) && $_POST['reason_4clr']=="No, Withdrawal") { ?>checked<?php  } ?>> <br>		
						<span class="text-danger"><?php if (isset($reason_4clr_error)) echo $reason_4clr_error; ?></span>
					</div>
					
	
					<div class="form-group">
						<label for="name">Phone Number:</label>
						<input type="text" name="phone_num" placeholder="Enter Your Phone #" required class="form-control" />
						<span class="text-danger"><?php if (isset($phone_num_error)) echo $phone_num_error; ?></span>
					</div>

					
					<div class="form-group">
						<input type="submit" name="add_details" value="Add a Details" class="btn btn-primary" />
						<input type="reset" name="reset_user" id="reset_user" value="Reset" class="btn btn-primary"/>
					</div>
				</fieldset>
			</form>
			<span class="text-success" style="color:green;"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"style="color:red;"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
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