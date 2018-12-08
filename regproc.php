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
if(isset($_POST['reg'])) {
       include('regconn.php');
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = strip_tags($_POST['username']);
        $password=strip_tags($_POST['password']);
        $repass=strip_tags($_POST['repassword']);
        $email = strip_tags($_POST['email']);
        if($username==''){
            header('location:./reg.php?error=user name empty');
            exit();
			
        }
        if(!strcmp($password,$repass)==0) {
            header('Location:./reg.php?error=password not match');
            exit();
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('location:reg.php?error=email not valid');
            exit();
        }
        $query = "select * from userreg where username='$username'";
        $result = mysqli_query($con,$query);
        if (mysqli_num_rows($result) >= 1) {
            //Usename is taken
            header('location:reg.php?error=username already taken. please try another one');
            exit();
        }

        /*This insert command for username, password and email. if you need any other field you can insert it here*/
        mysqli_query($con,"INSERT INTO userreg(username,password,email) VALUES ('$username','$password','$email')");//) or  die("".mysqli_error());
        //Here you can write conformation or success message or use any redirect
        //echo "Register success";
		
		 //<a href="userupdate.html" class="w3-bar-item w3-button w3-padding-large">Train Details</a>
    }
}
 else {
    header('location:reg.php');
    exit();
}
?>
<h1>Registered successfully!!</h1><br>
<br>
<a href="userhome.html" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">explore</a>
</body>
</html>
