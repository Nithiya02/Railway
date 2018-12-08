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
		$haltno = strip_tags($_POST['haltno']);
        $haltstation1 = strip_tags($_POST['haltstation1']);
        $arrival1 = strip_tags($_POST['arrival1']);
        $departure1 = strip_tags($_POST['departure1']);
		$haltstation2 = strip_tags($_POST['haltstation2']);
        $arrival2 = strip_tags($_POST['arrival2']);
        $departure2 = strip_tags($_POST['departure2']);
		$haltstation3 = strip_tags($_POST['haltstation3']);
        $arrival3 = strip_tags($_POST['arrival3']);
        $departure3 = strip_tags($_POST['departure3']);
		$haltstation4 = strip_tags($_POST['haltstation4']);
        $arrival4 = strip_tags($_POST['arrival4']);
        $departure4 = strip_tags($_POST['departure4']);
		$haltstation5 = strip_tags($_POST['haltstation5']);
        $arrival5 = strip_tags($_POST['arrival5']);
        $departure5 = strip_tags($_POST['departure5']);
        
        
        /*if($trno==NULL || $tostation=NULL ||  $fromstation=NULL || $arrival=NULL || $departure=NULL || $haltno=NULL ){
            header('location:./reg.php?error=fill all values');
            exit();
			
        }*/
       
        $query = "select * from haltstationdetails where trno='$trno' ";
        $result = mysqli_query($con,$query);
        if (mysqli_num_rows($result) >= 1) {
            //Usename is taken
            header('location:reg.php?error=haltstation detail already filed. please try another one');
            exit();
        }
         
		 
        /*This insert command for username, password and email. if you need any other field you can insert it here*/
       mysqli_query($con,"INSERT INTO haltstationdetails(trno,haltno,haltstation1,arrival1,departure1,haltstation2,arrival2,departure2,haltstation3,arrival3,departure3,haltstation4,arrival4,departure4,haltstation5,arrival5,departure5) 
		VALUES ('$trno','$haltno','$haltstation1','$arrival1','$departure1','$haltstation2','$arrival2','$departure2','$haltstation3','$arrival3','$departure3','$haltstation4','$arrival4','$departure4','$haltstation5','$arrival5','$departure5')");//) or  die("".mysqli_error());
     mysqli_query($con,"INSERT INTO haltstationdetails1(trno,haltno,haltstation1,arrival1,departure1,haltstation2,arrival2,departure2,haltstation3,arrival3,departure3,haltstation4,arrival4,departure4,haltstation5,arrival5,departure5) 
		VALUES ('$trno','$haltno','$haltstation1','$arrival1','$departure1','$haltstation2','$arrival2','$departure2','$haltstation3','$arrival3','$departure3','$haltstation4','$arrival4','$departure4','$haltstation5','$arrival5','$departure5')");
		
		 //<a href="userupdate.html" class="w3-bar-item w3-button w3-padding-large">Train Details</a>
    
}
 else {
    header('location:reg.php');
    exit();
}
?>
</body>
</html>
