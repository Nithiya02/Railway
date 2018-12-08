<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 10px;
    font-family: 'Lato', sans-serif;
	 background-image:url("homeback.jpeg");
	 color:white;
	 
}

.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
	color:white;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
  ul.b {list-style-type: square;}
}
</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   <h1> features  </h1>
   

	
	 <li>-> Accurate Details </li>
	 <li>-> No need to wait anymore</li>
	 <li>-> Easy Access</li>

	 
	
    <a href="several_login.html">START</a>
 
 </div>
</div>

<h1>welcome!!</h1>
<h2>Know about train timings at a click</h2>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; View more</span>

<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
     
</body>
</html>
