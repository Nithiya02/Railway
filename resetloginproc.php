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
    if(isset($_POST['trno']) && isset($_POST['station'])) {
        $trno = strip_tags($_POST['trno']);
        $station=strip_tags($_POST['station']);
        
        $query = "select * from masterdetails where station='$station' and station in (select tostation from trdetails where tostation='$station')";
        $result = mysqli_query($con,$query);
        if($result)
		{
			$sql="delete from trdetails where trno='$trno'and tostation in (select tostation from masterdetails where tostation='$station')";
			$result1 = mysqli_query($con,$sql);
             $sql2=" insert into trdetails( select trno,fromstation,tostation,arrival,departure,noofdays  from trdetails1 where trno='$trno');";
			 $result2 = mysqli_query($con,$sql2);
			 $sql3="delete from haltstationdetails where trno='$trno'";
			$result3 = mysqli_query($con,$sql3);
             $sql4=" insert into haltstationdetails( select trno,haltno,haltstation1,arrival1,departure1,haltstation2,arrival2,departure2,haltstation3,arrival3,departure3,
             haltstation4,arrival4,departure4,haltstation5,arrival5,departure5	from haltstationdetails1 where trno='$trno');";
			 $result4 = mysqli_query($con,$sql4);
			 
    }
}
else {
    header('location:login.php');
    exit();
}
}
?>
<h1>Reset Completed Successfully!!</h1><br>
<br>
</body>
</html>