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
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../layout/scripts/jquery.slidepanel.setup.js"></script>
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
	  
        <h2>INTRODUCTION</h2>
		
         <p>Adama Science and Technology University(ASTU) is found in Adama city, region of Oromia. 
		 100Km far from Addis. ASTU former name was Adama-TVET which was established in 1987EC. 
		 ASTU became as a university in 1996EC. It is one of known higher institution in the country due to 
		 the ability to hold more than thousands students at this time and many facilities. Nowadays so many 
		 activities have been done with in campus manually. From these activates, student and Admin-Staff clearance process, 
		 is the one which is undertaken in order to make the both clear from any university property or 
		 tangible possession that is owned by someone. 
		</p>
      </div>
   
	  <div id="slidbox">
      <div class="topbox last">

       
      </div>
	  
	  <div id="slidboxtxt">
	   <p>Clearance is a status of granted individuals, typically members of some organization 
	   such as Employees of private or Government organization, University graduates or failure student and others, 
	   allowing them access to confidential information, a clearance by itself is normally not sufficient to gain access. 
	
		<br>
		Academics staff responsible relating to student clearance (registrar office, student, library, social service (student affairs) 
		to log into the system. 
		<br>
		Same to that the Administrative staff will facilitate for terminated staff, 
		in differently system administrator has CRUD (create, read, update and delete) option...</p>
		</div>
      <br class="clear" />
	  </div>	  
    </div>
	
    <div id="loginpanel">
      <ul>
        <li class="left">Read here &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel"> ASTU Online Clr </a>
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
           <li><a href="../index.php">Home</a></li>
	  
			<li><a href="astu_events.php">ASTU Events</a></li>
			<li class="active"><a href="about_us.php">About Us</a>
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
			<li ><a href="useful_links.php">Useful Links</a>
		</li>
    </ul>
  </div>
</div>


<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
     <h1>ASTU Vision, Mission & Core Values </h1>
	<br>
	<h6>Vision</h6>
<!--    <h2>Headline 2 Colour and Size</h2>
    <h3>Headline 3 Colour and Size</h3>
    <h4>Headline 4 Colour and Size</h4>
    <h5>Headline 5 Colour and Size</h5>
    <h6>Core Values</h6>	-->
    <p>ASTU aspires to be the first choice in Ethiopia and the premier centrer 
		<br> of excellence in applied science and technology in Africa by 2030.</p>
   
	<h6>Mission</h6>
    <p>The mission of ASTU is to provide ethical and competent graduates in applied science and technology 
		<br>through quality education, demand driven research and community service. 
		<br>ASTU also provides innovative knowledge to support the socio-economic development of the nation.</p>
    <h6>Core Values</h6>
	<ol>
      <li>	Originality and Innovativeness.</li>
      <li>	Academic freedom and integrity.</li>
      <li>	Sense of belongingness and ownership.</li>
      <li>	Nurturing diversity.</li>
      <li>	Professional ethics.</li>
      <li>	Transparency and accountability.</li>
      <li>	Responsiveness.</li>
    </ol>
	
	<h6>ASTU Contact Address</h6>
	<p>Address: Kebele 14 Adama, Ethiopia</p>
	<p>Phone: +251-221-110400</p>
	<p>Fax: +251-221-100038</p>
	<p>P.O.BOX: 1888 Adama, Ethiopian</p>
	<p><a href="http://www.astu.edu.et/">Wesite Address:-http://www.astu.edu.et/</a></p>
	<p><a href="">Email:- e-mail: info@astu.edu.et</a></p>
	<br>
	<br>
      <h6>A Bit More Personal</h6>
		<h6>What’s a Portfolio Project?</h6>
	<p>A portfolio project is a self-directed project that I complete to showcase my skills and abilities.<br> 
	It can be anything from a website to a mobile app to a piece of software.<br> 
	The goal of a portfolio project is to show potential employers or clients what I can do.</p>
	
	<p>There are many reasons to build a portfolio project. But here are a few of the most common for me:</p>
	<ol>
	<li>To showcase my skills and abilities: A portfolio project is a great way to show potential employers or clients what I can do.<br>
		It can be a way to demonstrate my technical skills, my creativity, and my problem-solving skills.</li>
	<br>
	<li>To gain experience: Building a portfolio project is a great way to gain experience in a particular area.<br>
		This can be helpful if I am looking for a job or if I am trying to start my own business.</li>
	<br>
	<li>To learn new skills: A portfolio project can be a great way to learn new skills.<br> 
		If I am interested in learning a new programming language or a new software development tool, a portfolio project can be a great way to get started.</li>
	<br>
	<li>To build my network: Building a portfolio project can help me to build my network. When I share my project with others,<br> 
		I can get feedback from them and I can also connect with people who are interested in my work.</li>
	<br>
	<li>To get noticed: A portfolio project can help me to get noticed by potential employers or clients.<br> 
		When I put my project out there, I am giving people a chance to see what I can do.</li>
	</ol>
	<p>Building a portfolio project, there are a few things I need to keep in mind. <br>First, Ineed to choose a project that is relevant to my interests and skills. <br> Second, I need to make sure that the project is well-designed and well-executed. <br>Third, I need to promote my project so that people can see it.</p>
	<p>Building a portfolio project can be a lot of work, but it is worth it. <br>A well-crafted portfolio project can help me to achieve my career goals.</p>

	<h6>Why do I build a Portfolio project?</h6>
	<h7>A portfolio project can serve several different purposes. Here are some of them:</h7>
	<h6>Based on interests and background: </h6>
	<p>A portfolio project can be a great way to showcase my unique interests and skills. <br>When I am networking or interviewing with potential employers, they will be interested in learning more about what I am passionate about and what I am good at. <br>My portfolio project can help me to highlight things.</p>
	<h6>A realistic workplace scenario: </h6>
	<p>A project can also provide me with a realistic workplace scenario (issue). <br>In the workplace, <br>I am often faced with loosely defined requirements and deadlines.<br> My portfolio project can help me to develop the skills necessary to successfully meet challenges.</p>
	<h6>Self-directed learning: </h6>
	<p>A portfolio project can also allow me to engage in self-directed learning. <br>This means that I can choose a project that I am interested in and that I want to learn more about. <br>This can be a great way to deepen my understanding of a technical topic or to explore a new area of interest.</p>
	<h6>Using technology to bring an idea to life:  </h6>
	<p>A portfolio project can also be a way to use technology to bring an idea to life. <br>This can be a great way to showcase my creativity and problem-solving skills.<br>
	When I choose a portfolio project, it is important to consider my interests, skills, and goals.<br> I should also choose a project that is challenging but achievable.<br> By carefully selecting and completing a portfolio project, I could create a valuable asset that will help me to succeed in my career.</p>
	<h6>Some additional tips for creating a successful portfolio project: (google.com)</h6>
	<li>Choose a project that I am passionate about. This will make the project more enjoyable and I will be more likely to see it through to completion.</li>
	<li>Break the project down into smaller, more manageable tasks. This will make the project less daunting and I will be more likely to stay on track.</li>
	<li>Set realistic deadlines for myself. This will help me to avoid feeling overwhelmed and stressed.</li>
	<li>Get feedback from others as I work on the project. This will help me to identify any areas that need improvement.</li>
	<li>Document my progress throughout the project. This will help me to remember what I have done and to track my progress.</li>
	<li>Present my project in a professional way. This will help me to make a good impression on potential employers.</li>


    </div>
    <div class="clear"></div>
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