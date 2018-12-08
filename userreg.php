<html>
<style>
body
{
 color : black;
 background-image: url("loginback.jpeg");
 margin:250 px ;
 padding-top:20px;
 padding-bottom:150 px;
 padding-right:50 px;
 padding-left:300px;
 }
 h1
 {
 color:black;
 }
 </style>
<?php
if(isset($_GET['error']))
echo $_GET['error'];
?>
<form action="regproc.php"  method="post">
<h1>REGISTER</h1>
    <label><b>Username:</b></label><br>
	<input name="username" type="text" /><br>
    <label><b>Password:</b></label><br>
	<input name="password" type="password" /><br>
    <label><b>Re-Type Password:</b></label><br>
	<input name="repassword" type="password" /><br>
    <label><b>E-mail:</b></label><br>
	<input name="email" type="email" /><br>
    <input name="reg" type="submit" value="reg" /><br>
</form> 
</body>
</html>