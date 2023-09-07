<?php
error_reporting(E_ALL);
session_start();

include_once '../astu_dbconnect.php';
$sql = "SELECT * FROM user_basic_info ORDER BY name ASC";
$result = mysqli_query($conn, $sql);




/* if (isset($_POST['search']))
  echo $_POST['chk0'], $_POST['chk1'];

 */



?>



<!--
	error_reporting(0);
	
	include_once("../astu_dbconnect.php");
	if (count($_POST) > 0)
	{
		$sql = "UPDATE user_basic_info 
	set name='".$_POST["name"] . "',
	 
	 '" . $_POST["user_role"] . "',
	 '" . $_POST["email"] . "',
	 '" .md5($_POST["userp_key"]) . "',
	 WHERE id = '".$_POST["id"]."'";
					
	mysqli_query($conn, $sql);
	$meassage = " Modified Successfully";
	}
	$select_query = "SELECT * FROM  user_basic_info WHERE id ='". $_GET["?"] . "'";
	$result = mysqli_query ($conn, $select_query);
	$row = mysqli_fetch_array($result);
?>

 -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Adama Science and Technology University.
School of Electrical Engineering and Computing,


-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ASTU_Online-Clr-Sys</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" /> 
<link rel="stylesheet" href="../layout/styles/regi-form.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>  <!--slide tobbox---->
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
			<li><a id="slideit" href="../index.php">Search</a></li> 
			
			<li><a href="../index.php">Log Out</a></li>
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
		   <li><a href="#">WelCome, System Administrator</a></li>
          <li><a href="#">Mr. User Name</a></li>
		  <li><a href="system_admin_newuser.php">Add New User</a></li>
		  <li><a href="#">List</a></li>
		   <li><a href="#">Edit</a></li>
          <li class="last"><a href="#">Delete</a></li>	 	  
        </ul>
		</li>
			<li><a href="task_list.php">Task List</a>
		</li>
			<li class="active"><a href="#">System Admin Task</a>
		</li>
											
    </ul>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <h1> List of Actors, Admin View  </h1>
    
	 
	   <form name="user_form" action="" method="POST">
	  <div class="form-group" >
						<label for="name" style="font-size:14; color:blue;" >Waiting your action, list by role:</label> 
						
						<div class="form-group">
					<!--	<label for="name">Specify User Role:</label>		-->
						<select name="user_role" id="user_role" class="form-control">
						<option value="0">---Select user occupation---</option>
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
			<input type="submit" name="approve" value="Approve" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;"/>
			&nbsp;
			<input type="submit" name="submit_modif" value="Submit, Modification" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:auto;"/>						
			&nbsp;
			<input type="submit" name="delete_user" id="delete_user" value="Delete" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;"/>								
		</div>      
      </form>
	 
	 
	 
	 
	 
    <!--  <h6>Table(s) </h6> -->
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead style="">
          <tr>
            <th>&nbsp; ----ID_#------ &nbsp;</th>
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

		// to paint each row by row but unable to work 
	$k = 0;
		while ($row = mysqli_fetch_array($result))
		{
			if ($k % 2 == 0)
				$class_name = "even_row";
			else 
				$class_name = "odd_row";
			
			//================//========
	

	//

?>
<!--tested by tinsaye==========-->
	<!--	<tr class = "<?php if (isset($class_name)) echo $class_name;?>" id="list_table">
			<td>
			<input type="checkbox" name="<?php echo "chk0";?>">&nbsp;
			 <?php echo $row["id"];?>
			 </td>
			 
			<td> <?php echo $row["name"];?> </td>
			<td> <?php echo $row["user_role"];?> </td>
			<td> <?php echo $row["email"];?> </td>
			<td> <?php echo $row["userp_key"];?> </td>
				<td> <?php /*echo $row["remark"]; */?> <textarea name="remark" id="remark" cols="17%" rows="1"></textarea></td>
			
		</tr>	
	-->	
	
	
	<!--------------abule test------->
	<tr class = "<?php if (isset($class_name)) echo $class_name;?>" id="list_table">
			<td>
			<input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $row[id]; ?>"/>&nbsp;
			 <?php echo $row["id"];?>
			 </td>
			 
			<td> <?php echo $row["name"];?> </td>
			<td> <?php echo $row["user_role"];?> </td>
			<td> <?php echo $row["email"];?> </td>
			<td> <?php echo $row["userp_key"];?> </td>
				<td> <?php /*echo $row["remark"]; */?> <textarea name="remark" id="remark" cols="17%" rows="1"></textarea></td>
			
		</tr>	
		
<?php 
			
			// to delete but unable to work 

	/* 	if (isset ($_POST ["delete_user"]))
	{
		$id = $_POST["chk_name"];
		while (list ($row, $result) = @each($id))
		{
			mysqli_query ($sql, "DELETE FROM user_basic_info WHERE id = $result ");
			//echo "$result,";
		}
		
	} */
	
	
		if (isset ($_POST ["delete_user"]))
	{
		if ($result($_POST(['checkbox']) != 0 ))
		{
			$row = array("checkbox" => $_POST ['checkbox']);
			$id = implode (',', $row['checkbox']);
			$result = mysqli_query ("DELETE FROM user_basic_info WHERE id IN($id)") or die(mysqli_error());
		}
		
		/*The implode function is used to "join elements of an array with a string". 
		The implode() function returns a string from elements of an array. 
		It takes an array of strings and joins them together into one string using a 
		delimiter (string to be used between the pieces) of your choice.*/
		
		
		/*
		$id = $_POST["chk_name"];
		while (list ($row, $result) = @each($id))
		{
			mysqli_query ($sql, "DELETE FROM user_basic_info WHERE id = $result ");
			//echo "$result,";
		}
		*/
		
	}




$k++;


		}
?>




        </tbody>
      </table>

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