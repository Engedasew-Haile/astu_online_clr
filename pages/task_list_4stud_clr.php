<?php  
session_start();  
if(!(isset($_SESSION['name']) and  $_SESSION['user_role']=="regi_assis"))
{  
 header("location:../index.php");  
 	echo $error_msg = "Incorrect Email or Password!!!";
}
 ?> 
 
 
<!--
error_reporting(E_ALL);
session_start();

include_once '../astu_dbconnect.php';
$sql = "SELECT * FROM user_basic_info ORDER BY name DESC";
$result = mysqli_query($conn, $sql);
?>
-->
<!--testing inner join-->
<?php
error_reporting(E_ALL);
//session_start();

/*    // working good
 include_once '../astu_dbconnect.php';
$sql = "SELECT * FROM user_basic_info  INNER JOIN user_details 
		ON user_basic_info.x_id = user_details.x_id";
$result = mysqli_query($conn, $sql); 
*/

	include_once '../astu_dbconnect.php';
	
	$sql = "select user_basic_info.name, user_details.acad_year, user_details.entry_year, user_details.remark,
			user_details.reason_4clr from user_basic_info inner join user_details on user_basic_info.id = user_details.id 
			where user_details.acad_year != ''  order by user_basic_info.name ASC";
			$result = mysqli_query($conn, $sql);

/*
if (isset($_GET["search"]))
{
	
	$search = $conn->escape_string($_GET['search']);
	//$result = mysqli_query($conn, "SELECT * FROM user_basic_info  INNER JOIN user_details 
		//ON user_basic_info.id = user_details.id AND user_details.acad_year != '' where year_circ like '&$_POST["year_circ"]&' AND  dept_name like '&$_POST["dept_name"]&' order by user_basic_info.name ASC");
		
	$result = mysqli_query($conn, "SELECT * FROM user_basic_info  INNER JOIN user_details 
		ON user_basic_info.id = user_details.id and user_details.acad_year != '' WHERE year_circ like '%{search}%' AND  dept_name like '%{search}%' order by user_basic_info.name ASC");	
		
*/		 
	//	$result = mysqli_query($conn, $query);
		print_r($_GET);
		//echo $result->num_rows;
//}

/*
$sql = "SELECT * FROM user_basic_info  INNER JOIN user_details 
		ON user_basic_info.id = user_details.id where user_details.acad_year != ''  order by user_basic_info.name ASC ";
$result = mysqli_query($conn, $sql); 			

*/


//JOIN...ON ,If you wish to specify the column on which to join two tables, use the JOIN...ON

//ORDER BY sorts returned results by one or more columns in ascending or descending order.
?>

<!--$_POST["name"] . "',
	 '" . $_POST["id"] . "', 
	 '" . $_POST["user_role"] . "',
	 '" . $_POST["email"] . "',
	 '" .md5($_POST["userp_key"]) . "',
	 '" .md5($_POST["cuserp_key"]). "',	  
	 '" . $_POST = "NOW()". "')";
	 
	 // 
->



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
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>  <!--slide tobbox---->
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>

<style>
.even_Row:hover {
background-color: #ffef46;
}
.odd_Row {
background-color: #FFF999;
font-size:12px;
color:#101010;
}
.odd_Row:hover {
background-color: #ffef46;
} 

</style>
<!--date time css-->
	 <link href="./layout/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
     <link href="../layout/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
    <!--    <h2>Please Login Here</h2>
       
	-->	
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
			<li><a id="slideit" href="https://www.google.com/search">Search</a></li> 
	<!--	<li><a href="user_detail.php">Add Detail</a></li>		-->
			<li><a href="log_out.php">Log Out</a></li>
      </ul>
      <p>Tel: +251-123-456 | Mail: info@astu-clr.edu.et</p>
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
      <li class="active"><a href="task_list_4stud_clr.php">Task List</a>
	   <ul>        
          <?php
				if ( isset( $_SESSION[ 'name' ] ) ) {
					?>		
		<form  method="post" action="">
          <li><a href="#">WelCome, <?php echo $_SESSION[ 'name' ];?></a></li>
		  <li><a href="#"><?php echo $_SESSION[ 'user_role' ]; ?></a></li>
		  
		  <li class="last"><a href="changePasskey.php">Change PassKey</a></li>
		  <li class="last"><a href="task_list_4stud_clr.php">&nbsp | &nbsp List</a></li>

		</form>	
		<?php
			}
		?>
				
        </ul>
	  
      </li>
      <li><a href="astu_events.html">ASTU Events</a>
      </li>
      <li><a href="about_us.html">About Us</a></li>
      <li class="last"><a href="useful_links.html">Useful Links</a></li>
    </ul>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <h1> List of Task populated here </h1>
      
      <!----===============-->	
	  <form action="" method="get">
	  
	  <div class="form-group">
						<label for="name" style="font-size:12; color:blue;" >Waiting to approve, list by year (Circle One),</label> 
						<br>
						
						<select name="year_circ" id="year_circ" class="form-control" style="">
						<option value="0">---select a year---</option>
						<option value="1">1st Year</option>
						<option value="2">2nd Year</option>
						<option value="3">3rd Year</option>
						<option value="4">4th Year</option> 				
						<option value="5">5th Year</option> 
						</select>	
					<br>		
						<label for="name" style="font-size:12; color:blue;" >and department:-</label> 
						<select name="dept_name" id="dept_name" class="form-control" style="">
						<option value="">---select student's department---</option>
						<option value="computing">Computing</option>
						<option value="civilEng">Civil Engineering</option>
						<option value="electrical">Electrical</option>
						<option value="mechanical">Mechanical Engineering</option> 				
						<option value="other">Other Departments</option> 
						</select>	
			<br>
			&nbsp																										<!--#88AB2D-->
			<input type="submit" name="search" value="Search" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;"/>						
			&nbsp;
			<input type="submit" name="approve" value="Approve" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;"/>						
			&nbsp;
	<!--		<input type="submit" name="delete" value="Delete" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;"/>								 -->
		</div> 
     
      </form>
	 
   <!--   <h6>Table(s)</h6>	-->
   
      <table summary="Summary Here" cellpadding="0" cellspacing="0" border="0" >
        <thead style="font-size:14px;">
          <tr>
            <th>------Name------</th>
            <th>--Acad_Year---</th>
            <th>---Entry_Year---</th>
            <th>Clearance_Reason</th>
            <!--<th>Be for you Remarked</th> -->
			<th>-------Statues-------</th>
			<th>Approval Date/Time</th>
			<th>--- Remark---</th>
          </tr>
        </thead>
		
		<tbody>
<?php
//echo "value is".$result;
 $k = 0;
	while ($row = mysqli_fetch_array($result))
	{
		if ($k % 2 == 0)
			$class_name = "even_row";
		else 
			$class_name = "odd_row";
	 
	
/* if ($result->num_rows)
 {
	 while ($row = $result->fetch_array($result))
	 {
		 
*/
 
 
 ?>
	<tr style="font-size:13px;" class = "<?php if(isset($class_name)) echo $class_name;?>" id="list_table"> 
		<td> <input type="checkbox" > 
			 <?php echo $row["name"]; ?> </td>
		<td> <?php echo $row["acad_year"]; ?> </td>
		<td> <?php echo $row["entry_year"]; ?> </td>
		<td> <?php echo $row ["reason_4clr"]; ?> </td>
		
	<!--	<td><!-- <?php echo $row ["clr_status"]; ?>  </td>		-->
		<td>
		<form >
		<div class="form-group" >
		<!--	<label for="name" style="font-size:12; color:blue;" ></label> 		-->
						<select name="clr_status" id="clr_status" class="form-control" >
						<option value="" >select status </option>
						<option value="Accepted" >Accepted</option>
						<option value="Pending">Pending</option>
						</select>
		</div>
		</form>
		</td>
		
	
	
		<td> 
		<div class="container_4date">	
		<div class="control-group4date">
                
                <div class="controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input size="22" type="text" value="--select date & time--" readonly>
                <!--    <span class="add-on"><i class="icon-remove"></i></span>	-->
					<span class="add-on"><i class="icon-th"></i></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
         </div>
         </div>	
			
		</td>
		<td>  <textarea name="remark" id="remark" cols="16" rows="1" value=""><?php echo $row ["remark"]; ?></textarea> </td>

	</tr>
<?php 
 $k++;
	 }
 //}
 
//} 
?>
	 </tbody>
      </table>
	  <!----end form--->

  <!--    <div id="comments">
        <h2>Comments</h2>
        <ul class="commentlist">          
          <li class="comment_even">
            <div class="author"><img class="avatar" src="../images/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
            <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
          </li>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="../images/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
            <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
          </li>
        </ul>
      </div>
 -->  
   <!--   <h2>Write A Comment</h2>
      <div id="respond">
        <form action="" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" />
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="5"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
	  --->
    </div>
	
  <!--======link were here============-->	
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

<!---<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" /> 
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
--->


<script type="text/javascript" src="./layout/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./layout/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../layout/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../layout/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>

</body>
</html>