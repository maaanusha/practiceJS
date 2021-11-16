<?php

$db = mysqli_connect("localhost","root","MySQLdesktop","tds-made-easy");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>