<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
h1
 {
 color:white;
 }
</style>
<body background="orderback.jpeg">

<?php
if(isset($_POST['submit'])) {
       include('adminconn.php'); 
        $trno = strip_tags($_POST['trno']);
        $tostation = strip_tags($_POST['tostation']);
        $fromstation = strip_tags($_POST['fromstation']);
        $arrival = strip_tags($_POST['arrival']);
		$departure = strip_tags($_POST['departure']);
		$noofdays = strip_tags($_POST['noofdays']);
        /*if($trno==NULL || $tostation=NULL ||  $fromstation=NULL || $arrival=NULL || $departure=NULL || $haltno=NULL ){
            header('location:./reg.php?error=fill all values');
            exit();
			
        }*/
       
        $query = "select * from trdetails where trno='$trno'";
        $result = mysqli_query($con,$query);
        if (mysqli_num_rows($result) >= 1) {
            //Usename is taken
            header('location:reg.php?error=train detail already filed. please try another one');
            exit();
        }

        /*This insert command for username, password and email. if you need any other field you can insert it here*/
        mysqli_query($con,"INSERT INTO trdetails(trno, tostation, fromstation, arrival, departure, noofdays) VALUES ('$trno','$tostation','$fromstation','$arrival','$departure','$noofdays')");//) or  die("".mysqli_error());
     //) or  die("".mysqli_error());    //Here you can write conformation or success message or use any redirect
	 mysqli_query($con,"INSERT INTO trdetails1(trno, tostation, fromstation, arrival, departure, noofdays) VALUES ('$trno','$tostation','$fromstation','$arrival','$departure','$noofdays')");
        echo "successfully entered!";
		
		 //<a href="userupdate.html" class="w3-bar-item w3-button w3-padding-large">Train Details</a>
    
}
 else {
    header('location:reg.php');
    exit();
}
?>
<p>TO SET HALT STATION DETAILS <a href="haltstation.html">CLICK HERE</a></p>
</body>
</html>
