<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
     
    </div>
    <div class="w3-padding-64">
      <a href="#" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Train Details</a>
      <a href="#work" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">Station Master Details</a>
      <a href="#update" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16">View Train Details </a>
      <a href="several_login.html" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">Logout</a>
    </div>
  </div>
  <div class="w3-half w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <h1></h1>
      <img src="/w3images/avatar3.png" class="w3-margin w3-circle" alt="" style="width:50%">
      <div class="w3-left-align w3-padding-large">
        
		<?php
if(isset($_GET['error']))
echo $_GET['error'];
?>
<form action="trainproc.php"  method="post">
<h1>TRAIN DETAILS</h1>
    <label><b>Train Number:</b></label><br>
	<input name="trno" type="number" /><br>
    <label><b>From:</b></label><br>
	<input name="fromstation" type="text" /><br>
    <label><b>To:</b></label><br>
	<input name="tostation" type="text" /><br>
    <label><b>Start Time:</b></label><br>
	<input name= "arrival" type="time" /><br>
	<label><b>End Time:</b></label><br>
	<input name="departure" type="time" /><br>
	<label><b>No of days:</b></label><br>
	<input name="noofdays" type="number" /><br>
    <input name="submit" type="submit" value="submit" /><br>
</form> 
      </div>
    </div>
  </div>
</div

<!-- Second Grid: Work & Resume -->
<div class="w3-row">
  <div class="w3-half w3-light-grey w3-center" style="min-height:800px" id="work">
    <div class="w3-padding-64">
     <?php
if(isset($_GET['error']))
echo $_GET['error'];
?>
<form action="masterproc.php"  method="post">
<h1>STATION MASTER DETAILS</h1>
    <label><b>ID:</b></label><br>
	<input name="id" type="number" /><br>
	<label><b>Name:</b></label><br>
	<input name="name" type="text" /><br>
    <label><b>Station:</b></label><br>
	<input name="station" type="text" /><br>
    <label><b>Phone Number:</b></label><br>
	<input name="phno" type="text" /><br>
    <label><b>Mail ID:</b></label><br>
	<input name= "mail" type="text" /><br>
    <input name="submit" type="submit" value="submit" /><br>
</form>  
	  
    </div>
    

    
  </div>
  <div class="w3-half w3-indigo w3-container" style="min-height:800px">
    <div class="w3-padding-64 w3-center">
      <h2>VIEW STATION MASTER DETAILS</h2>
	  <?php


$name="root";
$pas="";
$dbname="admin";
$con=mysqli_connect("localhost",$name,$pas);

   
   if(! $con ) {
      die('Could not connect: ' );
   }
 mysqli_select_db($con,$dbname);
   $sql = 'SELECT id, name, station, phno, mail FROM masterdetails';
   
   $retval = mysqli_query( $con, $sql );
    
   if(! $retval ) {
      die('Could not get data: ' );
   }
   
   while($row = mysqli_fetch_array($retval)) {
      echo " ID :{$row['id']}  <br> ".
	    " NAME :{$row['name']}  <br> ".
         "STATION : {$row['station']} <br> ".
         "PHONE NUMBER : {$row['phno']} <br> ".
		 "MAIL : {$row['mail']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysqli_close($con);


?>

      <div class="w3-container w3-responsive">
        
		
        </div>  
  </div>
</div>
</div>
<!-- Third Grid: Swing By & Contact -->
<div class="w3-row" id="update">
  <div class="w3-half w3-dark-grey w3-container w3-center" style="height:700px">
    <h2>VIEW TRAIN DETAILS</h2><br>
	
      <?php


$name="root";
$pas="";
$dbname="admin";
$con=mysqli_connect("localhost",$name,$pas);

   
   if(! $con ) {
      die('Could not connect: ' );
   }
 mysqli_select_db($con,$dbname);
   $sql = 'SELECT trno,fromstation,tostation,arrival,departure,noofdays FROM trdetails';
   
   $retval = mysqli_query( $con, $sql );
    
   if(! $retval ) {
      die('Could not get data: ' );
   }
   
   while($row = mysqli_fetch_array($retval)) {
      echo " TRAIN NUMBER :{$row['trno']}  <br> ".
	    " FROMSTATION		:{$row['fromstation']}  <br> ".
         "TOSTATION : {$row['tostation']} <br> ".
         "START TIME : {$row['arrival']} <br> ".
		 "END TIME : {$row['departure']} <br> ".
		 "NO OF DAYS : {$row['noofdays']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysqli_close($con);


?>

  </div>
  <div class="w3-half w3-teal w3-container" style="height:700px">
    <div class="w3-padding-64 w3-padding-large">
      
	  <h1>Contact</h1>
      <p class="w3-opacity">GET IN TOUCH</p>
      <form class="w3-container w3-card w3-padding-32 w3-white" action="contact.php" target="_blank">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Name">
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Email">
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Message">
        </div>
        <input name="Send" type="submit" value="Send" class="w3-button w3-teal w3-right"/></br>
      </form>
    </div>
  </div>
</div>


</body>
</html>
