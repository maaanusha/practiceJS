<?php

// php code to search data in mysql database and set it in input text
include "dbConn.php"; // Using database connection file here
if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['id'];
    

    
    // mysql search query
    $query = "SELECT `userid` FROM `tds_user` WHERE `id` = $id LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
     
    $userid = $row['userid'];
    $responsible_person_name = $row['responsible_person_name'];
    $email_id = $row['email_id'];
    $password = $row['password'];
    $role_id = $row['role_id'];
    $mobile = $row['mobile'];
    $created_on = $row['created_on'];
    $Status = $row['Status'];
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
    $userid = "";
    $responsible_person_name = "";
    $email_id = "";
    $password = "";
    $role_id = "";
    $mobile = "";
    $created_on = "";
    $Status = "";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $userid = "";
    $responsible_person_name = "";
    $email_id = "";
    $password = "";
    $role_id = "";
    $mobile = "";
    $created_on = "";
    $Status = "";
}


?>



<!DOCTYPE html>

<html>

    <head>

        <title> PHP FIND DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

    <form action="search.php" method="post">

        Id:<input type="text" name="id"><br><br>

        User:<input type="text" name="fname" value="<?php echo $userid;?>"><br>

        <input type="submit" name="search" value="Find">

           </form>

    </body>

</html>