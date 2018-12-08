<?php
//Give your mysql username password and database name
$name="root";
$pas="";
$dbname="admin";
$con=mysqli_connect("localhost",$name,$pas);
mysqli_select_db($con,$dbname);
//mysqli_select_db($bd, $mysql_database) or die("Could not select database");
?>