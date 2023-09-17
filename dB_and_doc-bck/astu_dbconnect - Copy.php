
<?php
	/*
	class dBController 
	{
		private $host = "localhost";
		private $user = "root";
		private $password = "";
		private $database = "astu_onclr_db";
		
		function __construct ()
		{
			$this->conn = $this->connectdB();
		}
		
		function connectdB()
		{
			$conn = mysqli_connect ($this->host,$this->user,$this->password,$this->database);
			return $conn;
		}
		
		function runQuery($query)
		{
			$result = mysqli_query($this->conn,$query);
			while($row=mysqli_fetch_assoc($result))
			{
				$resultset[]=$row;
			}
			if (!empty($resultset))
				return $resultset;			
		}
		function numRows ($query)
		{
			$result = mysqli_query($this->conn,$query);
			$rowcount = mysqli_num_rows($result);
			return $rowcount;
		}
		function updateQuery($query) {
		$result = mysqli_query($this->conn,$query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}
	
	function insertQuery($query) {
		$result = mysqli_query($this->conn,$query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}
	
	function deleteQuery($query) {
		$result = mysqli_query($this->conn,$query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}
		
	}
/*
$dbConn =mysqli_connect('localhost', 'root', '') or die("could not connect to server");
mysqli_select_db($dbConn,'astu_onclr_db') or die("could not select astu db . . . ");
*/

/*
$db = new mysqli('127.0.0.1', 'root', '', 'astu_onclr_db');

if($db->connect_errno){
	die ('sorry, we are having some problems.');
}
*/

/*  astu_dbconnect
	astu_onclr_db      =>> orginal db
*/

error_reporting(E_ALL);
$conn = mysqli_connect("localhost","root","","astu_dbconnect.php");

if($conn->connect_errno)
	{
		die ('sorry, we are having some problems.');
	}

?>