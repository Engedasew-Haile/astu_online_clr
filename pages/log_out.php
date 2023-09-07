

<?php 

	session_start ();

	if(isset($_SESSION['email']))
		{
			//session_destroy();
			SESSION_DESTROY ();
			unset($_SESSION['email']);
			unset($_SESSION['user_role']);
			unset($_SESSION['userp_key']);
			//header("Location: ../index.php");
			header ('Location: http://localhost:8100/astu_online_clr/index.php');
		}
		else 
		{
			header ('Location: http://localhost:8100/astu_online_clr/index.php');
			//exit();
		}

?>


