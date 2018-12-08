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
        $id = strip_tags($_POST['id']);
		$name = strip_tags($_POST['name']);
        $station = strip_tags($_POST['station']);
        $phno = strip_tags($_POST['phno']);
        $mail = strip_tags($_POST['mail']);
		$password = strtoupper($station);
        
        /*if($trno==NULL || $tostation=NULL ||  $fromstation=NULL || $arrival=NULL || $departure=NULL || $haltno=NULL ){
            header('location:./reg.php?error=fill all values');
            exit();
			
        }*/
       
        $query = "select * from masterdetails where id='$id' ";
        $result = mysqli_query($con,$query);
        if (mysqli_num_rows($result) >= 1) {
            //Usename is taken
            header('location:reg.php?error=train detail already filled. please try another one');
            exit();
        }

        /*This insert command for username, password and email. if you need any other field you can insert it here*/
        mysqli_query($con,"INSERT INTO masterdetails(id, name, station, phno, mail) VALUES ('$id','$name','$station','$phno','$mail')");//) or  die("".mysqli_error());
     //) or  die("".mysqli_error());    //Here you can write conformation or success message or use any redirect
	    mysqli_query($con,"INSERT INTO masterlogin(username, password) VALUES ('$mail','$password')");
        echo "successfully entered!";
		
		 //<a href="userupdate.html" class="w3-bar-item w3-button w3-padding-large">Train Details</a>
    
}
 else {
    header('location:reg.php');
    exit();
}
?>
</body>
</html>
