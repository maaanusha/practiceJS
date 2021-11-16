<!DOCTYPE html>
<html>
<head>
  <title>Display all records from tds_user</title>
</head>
<body>

<h2>Customer details</h2>
<table border="2">
  <tr>
    <td>userid.</td>
    <td>responsible_person_name</td>
    <td>email_id</td>
    <td>password</td>
    <td>role_id</td>
    <td>mobile</td>
    <td>created_on</td>
    <td>status</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records1 = mysqli_query($db,"select * from tds_user"); // fetch data from database
while($data = mysqli_fetch_array($records1))
{
?>
  <tr>
    <td><?php echo $data['userid']; ?></td>
    <td><?php echo $data['responsible_person_name']; ?></td>
    <td><?php echo $data['email_id']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['role_id']; ?></td>
    <td><?php echo $data['mobile']; ?></td>
    <td><?php echo $data['created_on']; ?></td>
    <td><?php echo $data['status']; ?></td>
  </tr> 
<?php
}
?>


<table border="2">
  <tr>
    <td>address_id</td>
    <td>remark</td>
    <td>address1</td>
    <td>address2</td>
    <td>city</td>
    <td>pincode</td>
    <td>state</td>
    <td>area</td>
  </tr>
<h2>Customer Address</h2>
<?php

include "dbConn.php"; // Using database connection file here

$records2 = mysqli_query($db,"select * from tds_customer_address"); // fetch data from database
while($data = mysqli_fetch_array($records2))
{
?>

  <tr>
    <td><?php echo $data['address_id']; ?></td>
    <td><?php echo $data['remark']; ?></td>
    <td><?php echo $data['address1']; ?></td>
    <td><?php echo $data['address2']; ?></td>
    <td><?php echo $data['city']; ?></td>
    <td><?php echo $data['pincode']; ?></td>
    <td><?php echo $data['state']; ?></td>
    <td><?php echo $data['area']; ?></td>
  </tr> 
<?php
}
?>
<?php mysqli_close($db); // Close connection ?>

</body>
</html>