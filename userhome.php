<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
body,h1,h2,h3,h4,h5,h6 {font color: "white"}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>
<h1>TRAIN DETAILS</h1><br>
<br>

<div class="w3-padding-80 w3-center">
<div class=" w3-indigo w3-container w3-center" style="height:700px">

<?php
if(isset($_POST['login'])) {
	include('adminconn.php');
	$trno = strip_tags($_POST['trno']); 
}
?>
<h1>TRAIN DETAILS</h1><br>
<br>

<div class="w3-padding-80 w3-center">
<div class=" w3-indigo w3-container w3-center" style="height:700px">
<?php
	$name="root";
$pas="";
$dbname="admin";
$con = mysqli_connect("localhost",$name,$pas);

   
   if(! $con ) {
      die('Could not connect: ' );
   }
 mysqli_select_db($con,$dbname);
	$sql2 = "SELECT trno,fromstation,tostation,arrival,departure,noofdays FROM trdetails where trno='$trno' ";
   
   $retval2 = mysqli_query( $con, $sql2 );
    
   if(! $retval2 ) {
      die('No trains to start/finish in your station.' );
   }
   while($row = mysqli_fetch_array($retval2)) {
      echo " TRNO :{$row['trno']}  <br> ".
	    " FROM STATION :{$row['fromstation']}  <br> ".
         "TO STATION : {$row['tostation']} <br> ".
         "START TIME : {$row['arrival']} <br> ".
		 "END TIME: {$row['departure']} <br> ".
		  "NO OF DAYS: {$row['noofdays']} <br> ".
         "--------------------------------<br>";
   }
    $sql1 = "SELECT trno,haltno,haltstation1,arrival1,departure1,haltstation2,arrival2,departure2,haltstation3,arrival3,departure3,haltstation4,arrival4,departure4,haltstation5,arrival5,departure5 FROM haltstationdetails where  trno='$trno'";
   $retval1 = mysqli_query( $con, $sql1 );
    
   if(! $retval1 ) {
      die('No trains to halt in your station.' );
   }
   
   while($row = mysqli_fetch_array($retval1)) {
      echo " TRAIN NUMBER:{$row['trno']}  <br> ".
	    " NO OF HALT STATION:{$row['haltno']}  <br> ".
	    " HAlTSTATION1 :{$row['haltstation1']}   ".
         "ARRIVAL : {$row['arrival1']}  ".
         "DEPARTURE : {$row['departure1']} <br> ".
		  " HAlTSTATION2 :{$row['haltstation2']}   ".
         "ARRIVAL : {$row['arrival2']}   ".
         "DEPARTURE : {$row['departure2']} <br> ".
		  " HAlTSTATION3 :{$row['haltstation3']}    ".
         "ARRIVAL : {$row['arrival3']}   ".
         "DEPARTURE : {$row['departure3']} <br> ".
		  " HAlTSTATION4 :{$row['haltstation4']}    ".
         "ARRIVAL : {$row['arrival4']}   ".
         "DEPARTURE : {$row['departure4']} <br> ".
		  " HAlTSTATION5 :{$row['haltstation5']}    ".
         "ARRIVAL : {$row['arrival5']}   ".
         "DEPARTURE : {$row['departure5']} <br> ". 
         "--------------------------------<br>";
		 
   }

  mysqli_close($con);


?>
</div>
</div>

</body>
</html>