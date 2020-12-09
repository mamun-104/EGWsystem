<!DOCTYPE>
<html>
<head>

<title>Admin Panel</title>

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>






</head>

<body background="waa.jpg" style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">




<!--
for top bar
-->
<div class="topnav">
  <a  href="welcome.php">  Home</a>
  
  <a href="govt_info.php">Government Information </a>
  <a href="electricity_portal.php">Electricity Portal</a>
  
  <a href="gas_portal.php">Gas Portal </a>
  <a href="water_portal.php">Water Portal</a>
  
  <a href="image_gallery.php">Image Gallery</a>
  <a href="login.php">Log-In</a>
  
  <a href="add.php">Create Account</a>
  <a class="active" href="">Admin Panel</a>
   <a href="contact_us.php">Contact us</a>
  
</div>


<br>
<br>
<br>

 <div  id="frm"   align="center" style=" background-color:#FFFFFF">
	   <form  action="hello.php" method="POST">
	   
	   <p> <h1 style="color: #FF9966; font-size:30px">
	   <label>ID: </label>
	   <input style="height:35px; width:250px" type="text" id="user" name="username" />
	   </h1>
	   </p>
	   
	   <p>
	   <h1 style="color:#FF9966; font-size:30px">
	   <label>PASSWORD </label>
	   <input style="height:35px; width:250px" type="text" id="pass" name="password" />
	   </h1>
	   </p>
	   
	   <p>
	   <h1 style="color:#FF9966; font-size:30px">
	   <label>DESIGNATION </label>
	   <input style="height:35px; width:250px" type="text" id="pass" name="password" />
	   </h1>
	   </p>
	   
	    <p>
		<br>
	   
	   <input style="height:50px; width:150px; font-size:36px; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #FF6600 ; border:thin"  type="submit" id="btn" value="Sign In" />
	   
	  
	  
	   </p>





</body>
</html>
