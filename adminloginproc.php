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
if(isset($_POST['login'])) {
       include('adminconn.php');
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = strip_tags($_POST['username']);
        $password=strip_tags($_POST['password']);
        if($username==''){
            header('location:./login.php?error=user name empty');
            exit();
			
        }
        if($password=='') {
            header('Location:./login.php?error=password empty');
            exit();
        }
        $query = "select * from admindetails where username='$username' and password='$password'";
        $result = mysqli_query($con,$query);
        if (mysqli_num_rows($result) != 1) {
            //Usename is taken
           header('Location:./login.php?error=not an admin');
            exit();
          
        }

    }
}
else {
    header('location:login.php');
    exit();
}
?>
<h1>logged in successfully!!</h1><br>
<br>
<a href="adminhome.php" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">explore</a>
</body>
</html>
