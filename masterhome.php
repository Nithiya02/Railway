<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">
 
  <div class=" w3-teal w3-container" style="height:700px">
    <div class="w3-padding-64 w3-padding-large">
      
	  <h1></h1>
      <p class="w3-opacity">DELAY INFO</p>
      <form class="w3-container w3-card w3-padding-32 w3-white" action="delay.php"  method="post">
        <div class="w3-section">
          <label>Train Number</label>
          <input  style="width:100%;" type="number" name="trno">
        </div>
        <div class="w3-section">
          <label>Station</label>
          <input style="width:100%;" type="text" name="station">
        </div>
        <div class="w3-section">
          <label>Delay</label>
          <input style="width:100%;" type="time" name="delay">
        </div>
        <input name="submit" type="submit" value="submit" class="w3-button w3-teal w3-right"/></br>
      </form>
    </div>
  </div>
</div>


</body>
</html>