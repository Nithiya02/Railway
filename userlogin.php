<html>
<head>
<style>
body
{
 color : white;
 background-image: url("loginback.jpeg");
 margin:250 px ;
 padding-top:20px;
 padding-bottom:150 px;
 padding-right:50 px;
 padding-left:300px;
 }
 h1
 {
 color:white;
 }
 </style>
 <?php
if(isset($_GET['error']))
echo $_GET['error'];
?>
<form action="loginproc.php"  method="post">
<h1>LOGIN</h1>
    <label><b>Username:</b></label><br>
	<input name="username" type="text" /><br>
    <label><b>Password:</b></label><br>
	<input name="password" type="password" /><br>
    <input name="login" type="submit" value="login" /><br>
	<p>If not a registered user,click here<a href="userreg.php">Register</a></p>
</form> 
</body>
</html>