
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
session_start();

/*    // working good
 include_once '../astu_dbconnect.php';
$sql = "SELECT * FROM user_basic_info  INNER JOIN user_details 
		ON user_basic_info.x_id = user_details.x_id";
$result = mysqli_query($conn, $sql); 
*/

	include_once '../astu_dbconnect.php';
	
	$sql = "select user_basic_info.name, user_details.dept_name, user_details.staff_position
			from user_basic_info inner join user_details on user_basic_info.id = user_details.id 
			where user_basic_info.user_role = 'term_staff' order by user_basic_info.name ASC";
			$result = mysqli_query($conn, $sql);
			

//JOIN...ON ,If you wish to specify the column on which to join two tables, use the JOIN...ON
// term_staff" value="terminating staff"
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
BY
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
<!-- #evenRow {
background-color: light;
font-size:12px;
color:#101010;
}
#evenRow:hover {
background-color: #ffef46;
}
#oddRow {
background-color: dark;
font-size:12px;
color:#101010;
}
#oddRow:hover {
background-color: #ffef46;
} 
-->
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
	<!--	<li><a href="user_detail.php">Add Detail</a></li>		-->
			<li><a href="../index.php">Log Out</a></li>
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
      <li class="active"><a href="task_list_2.php">Task List</a>
      </li>
      <li><a href="astu_events.html">ASTU Events</a>
      </li>
      <li><a href="#">About Us</a></li>
      <li class="last"><a href="#">Useful Links</a></li>
    </ul>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="content">
      <h1> List of Task populated here </h1>
      
      <!----===============-->	
	  <form >
	  
	  <div class="form-group">
						<label for="name" style="font-size:12; color:blue;" >Waiting to approve,</label> 
						<br>
	
			<br>
			&nbsp																										<!--#88AB2D-->
		<!--	<input type="submit" name="search" value="Search" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;"/>					-->
			&nbsp;
			<input type="submit" name="approve" value="Approve" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;"/>						
			&nbsp;
			<input type="submit" name="delete" value="Delete" class="btn btn-primary" style="color:White;background-color:;border-style:None;width:100px;"/>								
		</div> 
     
      </form>
	 
   <!--   <h6>Table(s)</h6>	-->
   
      <table summary="Summary Here" cellpadding="0" cellspacing="0" border="0" >
        <thead style="font-size:14px;">
          <tr>
            <th>------Name------</th>
            <th>--Department---</th>
            <th>---Position---</th>
        <!--    <th>Clearance_Reason</th>		-->
			<th>-------Statues-------</th>
			<th>Approval Date/Time</th>
			<th>---Remark---</th>
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
		
 
 
 
 
 ?>
	<tr style="font-size:13px;" class = "<?php if(isset($class_name)) echo $class_name;?>" id="list_table"> 
		<td> <input type="checkbox" > 
			 <?php echo $row["name"]; ?> </td>
		<td> <?php echo $row["dept_name"]; ?> </td>
		<td> <?php echo $row["staff_position"]; ?> </td>
	<!--	<td> <?php echo $row ["reason_4clr"]; ?> </td>			-->
	<!--	<td><!-- <?php echo $row ["clr_status"]; ?>  </td>		-->
		<td>
		<form >
		<div class="form-group" >
		<!--	<label for="name" style="font-size:12; color:blue;" ></label> 		-->
						<select name="clr_status" id="clr_status" class="form-control" >
						<option value="0" >select status </option>
						<option value="accepted" >Accepted!</option>
						<option value="pending">Pending!</option>
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
		<td> <!--<?php echo $row ["remark"]; ?> --> <textarea name="remark" id="remark" cols="16" rows="1"></textarea> </td>

	</tr>
<?php 
 $k++;
} 
?>
	 </tbody>
      </table>
	  <!----end form--->

  
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