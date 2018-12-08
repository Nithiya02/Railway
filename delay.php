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
 if(isset($_POST['submit'])) {
 $trno = strip_tags($_POST['trno']);
        $station = strip_tags($_POST['station']);
		$delay = strip_tags($_POST['delay']);
		
		
   $sql = "update trdetails set arrival=date_add(arrival,interval ".(int)$delay." hour ) where trno='$trno' and fromstation='$station'";
   
   $retval = mysqli_query( $con, $sql );
    
		$sql1 = "update trdetails set departure=date_add(departure,interval ".(int)$delay." hour ) where trno='$trno' ";
   
   $retval1 = mysqli_query( $con, $sql1 );
        
		$sql2 = "select * from haltstationdetails where trno in(select trno from trdetails where fromstation='$station'";
		$retval2 = mysqli_query( $con, $sql );
		if($retval2)
		{
			$sql3= " update haltstationdetails set arrival1=date_add(arrival1,interval ".(int)$delay." hour ),departure1=date_add(departure1,interval ".(int)$delay." hour ),arrival2=date_add(arrival2,interval ".(int)$delay." hour ),departure2=date_add(departure2,interval ".(int)$delay." hour ),arrival3=date_add(arrival3,interval ".(int)$delay." hour ),departure3=date_add(departure3,interval ".(int)$delay." hour ),
			arrival4=date_add(arrival4,interval ".(int)$delay." hour ),departure4=date_add(departure4,interval ".(int)$delay." hour ),arrival5=date_add(arrival5,interval ".(int)$delay." hour ),departure5=date_add(departure5,interval ".(int)$delay." hour )";
			$retval3 = mysqli_query( $con, $sql3 );
		}	
		$sql4="update haltstationdetails set arrival1=date_add(arrival1,interval ".(int)$delay." hour ),departure1=date_add(departure1,interval ".(int)$delay." hour ),arrival2=date_add(arrival2,interval ".(int)$delay." hour ),departure2=date_add(departure2,interval ".(int)$delay." hour ),arrival3=date_add(arrival3,interval ".(int)$delay." hour ),departure3=date_add(departure3,interval ".(int)$delay." hour ),
			arrival4=date_add(arrival4,interval ".(int)$delay." hour ),departure4=date_add(departure4,interval ".(int)$delay." hour ),arrival5=date_add(arrival5,interval ".(int)$delay." hour ),departure5=date_add(departure5,interval ".(int)$delay." hour ) where haltstation1='$station'";
       $retval4 = mysqli_query( $con, $sql4 );
	   $sql5="update haltstationdetails set arrival2=date_add(arrival2,interval ".(int)$delay." hour ),departure2=date_add(departure2,interval ".(int)$delay." hour ),arrival3=date_add(arrival3,interval ".(int)$delay." hour ),departure3=date_add(departure3,interval ".(int)$delay." hour ),
			arrival4=date_add(arrival4,interval ".(int)$delay." hour ),departure4=date_add(departure4,interval ".(int)$delay." hour ),arrival5=date_add(arrival5,interval ".(int)$delay." hour ),departure5=date_add(departure5,interval ".(int)$delay." hour ) where haltstation2='$station'";
       $retval5 = mysqli_query( $con, $sql5 );
	   $sql6="update haltstationdetails set arrival3=date_add(arrival3,interval ".(int)$delay." hour ),departure3=date_add(departure3,interval ".(int)$delay." hour ),
			arrival4=date_add(arrival4,interval ".(int)$delay." hour ),departure4=date_add(departure4,interval ".(int)$delay." hour ),arrival5=date_add(arrival5,interval ".(int)$delay." hour ),departure5=date_add(departure5,interval ".(int)$delay." hour ) where haltstation3='$station'";
      $retval6 = mysqli_query( $con, $sql6 );
	  $sql7="update haltstationdetails set arrival4=date_add(arrival4,interval ".(int)$delay." hour ),departure4=date_add(departure4,interval ".(int)$delay." hour ),arrival5=date_add(arrival5,interval ".(int)$delay." hour ),departure5=date_add(departure5,interval ".(int)$delay." hour ) where haltstation4='$station'";
      $retval7 = mysqli_query( $con, $sql7 );
	  $sql8="update haltstationdetails set arrival5=date_add(arrival5,interval ".(int)$delay." hour ),departure5=date_add(departure5,interval ".(int)$delay." hour ) where haltstation5='$station'";
 
 }
 
   
   mysqli_close($con);


?>

</body>
</html>
