<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
include "dbConn.php"; 
		$conn = mysqli_connect("TDS", "root", "MySQLdesktop", "tds_user");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$userid = $_REQUEST['userid'];
		$responsible_person_name = $_REQUEST['responsible_person_name'];
		$gender = $_REQUEST['email_id'];
		$password = $_REQUEST['password'];
		$role_id = $_REQUEST['role_id'];
		$mobile = $_REQUEST['mobile'];
		$created_on = $_REQUEST['created_on'];
		$Status = $_REQUEST['Status'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$userid',
			'$responsible_person_name','$email_id','$password','$role_id','$mobile','created_on','Status')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$userid\n $responsible_person_name\n "
				. "$email_id\n $password\n $role_id\n $mobile\n $created_on\n $Status");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
