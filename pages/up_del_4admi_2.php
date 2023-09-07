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
		error_reporting(E_ALL);
ini_set ('display_error', '1');

include_once '../astu_dbconnect.php';
if (isset ($_POST['update'] ))
{	
	//$result = array_slice ( $_POST, 0, sizeof ( $_POST ) - 1 ); // to reduce submitted 2 buttons
	$result=$_POST;	
	$keys = array_keys($result);
	$u = 0;
	//print_r($_POST);
	foreach ( $result as $x => $value ) 
	{
		if (strstr($x, "astu") == 0 and $u < sizeof($result)-1) 
		
		{
			$z_remark = $result[$keys[$u + 1]];
			$qr = mysqli_query($conn, "UPDATE user_details SET remark = '$z_remark' WHERE id = '$x'" );
		}	
		else {
			continue;
		}		
		$u = $u + 1;
}
}
	// working right
	/* foreach ( $result as $x => $value ) 
		{
			$query_1 = mysqli_query ($conn, "select remark from user_details where id = '$x'");
			$row = mysqli_fetch_array ($query_1);
			
			$query_2 = ( int ) $row ['remark'] + $_POST['remark_stmt'];
			$query_3 = mysqli_query ($conn, "update user_details set remark = '$query_2' where id = '$x'");
		
		//print_r($_POST);
		} */
		/* 
		    $query_1 = mysqli_query ($conn, "select remark from user_details where id = '$x'");
			$row = mysqli_fetch_array ($query_1);
			
			$query_2 = ( int ) $row ['remark'] + $_POST['remark_stmt'];
			$query_3 = mysqli_query ($conn, "update user_details set remark = '$query_2' where id = '$x'") */;
		
		//print_r($_POST);
//}


/* working one 
include_once '../astu_dbconnect.php';
$sql = "SELECT * FROM user_basic_info ORDER BY name ASC";
$result = mysqli_query($conn, $sql);

*/




?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Adama Science and Technology University.
School of Electrical Engineering and Computing,
Department of Computing
Graduate Class Of 2017

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ASTU_Online-Clr-Sys</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" /> 
<link rel="stylesheet" href="../layout/styles/regi-form.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>  <!--slide tobbox---->
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>



<style>
.even_Row:hover {
background-color: #ffef46;
}
.odd_Row {
background-color: #FFF999;  <!--#591434;-->
font-size:12px;
color:#101010;
}
.odd_Row:hover {
background-color: #ffef46;
} 

</style>
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
			<li><a id="slideit" href="https://www.google.com/search?q">Search</a></li> 
			
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
	    <ul> 
		 <!--  <li><a href="#">WelCome, System Administrator</a></li>
          <li><a href="#">Mr. User Name</a></li>
		  -->
		  <li><a href="system_admin_newuser.php">Add New User</a></li>
		  <li><a href="up_del_4admi_2.php">List</a></li>
		<!--   <li><a href="edit_userinfo.php">Edit</a></li>    -->
        <!--  <li class="last"><a href="#">Delete</a></li>	 	  -->
        </ul>
		</li>
			<li><a href="task_list.php">Task List</a>
		</li>
			<li class="active"><a href="up_del_4admi_2.php">System Admin List</a>
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
        </ul>
		</li>
											
    </ul>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <h1> List of Actors, Admin View  </h1>
    
	 
	   <form name="user_form" action="" method="post">
	  <div class="form-group" >
						<label for="name" style="font-size:14; color:blue;" >Waiting your action, list by role:</label> 
						
						<div class="form-group">
					<!--	<label for="name">Specify User Role:</label>		-->
						<select name="user_role" id="user_role" class="form-control">
						<option value="">---Select user occupation---</option>
						<option value="list_all">List All User Type</option>						
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
			&nbsp;																										<!--#88AB2D-->
			<input type="submit" name="search" value="Search" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;hight:"10px;"/>						
			&nbsp;
			<input type="submit" name="update" value="Update" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;"/>
			&nbsp;
		<!--	<input type="submit" name="submit_modif" value="Submit, Modification" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:auto;"/>						-->
			&nbsp;
		<!--	<input type="submit" name="delete_user" id="delete_user" value="Delete" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;"/>					-->			
		</div>      
     
	  
    <!--  <h6>Table(s) </h6> -->
	
			
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead style="">
          <tr>
            <th>&nbsp;-------ID_#-------- &nbsp;</th>
            <th>&nbsp; -------Name------- &nbsp;</th>
			<th>&nbsp; User_Role &nbsp;</th>
            <th>E-Mail Address</th>           
			<th>Password</th>
			<th>Remark </th> 	
			<th>---AdminAction----</th>
          </tr>
        </thead>
        <tbody>
		
<?php

include_once '../astu_dbconnect.php';

 //$query_1 = "SELECT * FROM user_basic_info  inner join clr_tb4both on user_basic_info.id = clr_tb4both.id ORDER BY name ASC";
    
		$query_1 = mysqli_query ($conn, "select * from user_basic_info inner join user_details on user_basic_info.id = user_details.id ORDER BY name ASC");
		while ($query_4 = mysqli_fetch_array($query_1))

	{
		if ($query_4 % 2 == 0)
			$class_name = "even_row";
	
		else 
			$class_name = "odd_row";
		
		echo "<tr>"; 
		echo "<td>";
		echo "<input type=\"checkbox\" name=".$query_4['id']."  value=".$query_4['name']."/> &nbsp".$query_4[ 'id' ] . "</td>";
		echo "<td>" . $query_4[ 'name' ] . "</td>";
		echo "<td>" . $query_4[ 'user_role' ] . "</td>";
		echo "<td>" . $query_4[ 'email' ] . "</td>";
		echo "<td>" . $query_4[ 'userp_key' ] . "</td>";	
		$remname="r-".$query_4[ 'id' ];
		echo "<td>" ."<textarea name=".$remname." cols=\"17%\" rows=\"1\"".">".$query_4['remark']."</textarea>"."</td>.";		
	
	echo "<td><a href='edit_userinfo.php?id=" . $query_4[ 'id' ] . "&name=" . $query_4[ 'name' ] . "&user_role=" . $query_4[ 'user_role' ] . "&email=" . $query_4[ 'email' ] . "&userp_key=" . $query_4[ 'userp_key' ] . "'>&nbsp &nbspEdit &nbsp |</a>".
	 "&nbsp &nbsp<a href='delete_user.php?id=" . $query_4[ 'id' ] . "'>Delete</a></td><tr>";
	}
	
?>		


		
<!--
			
		
		/*The implode function is used to "join elements of an array with a string". 
		The implode() function returns a string from elements of an array. 
		It takes an array of strings and joins them together into one string using a 
		delimiter (string to be used between the pieces) of your choice.*/
		
	-->









        </tbody>
      </table>
 </form>
    </div>
    <div class="clear"></div>
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