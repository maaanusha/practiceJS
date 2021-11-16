<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from tds_user"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $userid = $_POST['userid'];
    $responsible_person_name = $_POST['responsible_person_name'];
    $email_id = $_POST['email_id'];
	$password = $_POST['password'];
    $role_id = $_POST['role_id'];
    $mobile = $_POST['mobile'];
    $created_on = $_POST['created_on'];
    $Status = $_POST['Status'];
    $edit = mysqli_query($db,"update tds_user set responsible_person_name='$responsible_person_name', email_id='$email_id' , password='$password', role_id='$role_id', mobile='$mobile', created_on='$created_on', Status='Status' where userid='$userid'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
    <input type="number" name="userid" value="<?php echo $data['userid'] ?>" placeholder = "Enter userid" Required>
  <input type="text" name="responsible_person_name" value="<?php echo $data['responsible_person_name'] ?>" placeholder="Enter Full Name" >
  <input type="email" name="email_id" value="<?php echo $data['email_id'] ?>" placeholder="Enter email" >
  <input type="password" name="password" value="<?php echo $data['password'] ?>" placeholder="Enter password" >
  <input type="number" name="role_id" value="<?php echo $data['role_id'] ?>" placeholder="Enter role_id" >
  <input type="number" name="mobile" value="<?php echo $data['mobile'] ?>" placeholder="Enter mobile number" >
  <input type="date" name="created_on" value="<?php echo $data['created_on'] ?>" placeholder="Enter date of creation" >
  <input type="text" name="Status" value="<?php echo $data['Status'] ?>" placeholder="Enter status" >
  
  <input type="submit" name="update" value="Update">
</form>