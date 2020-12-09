<!--
	
	
	
	include 'connect.php';
	
	if(isset($_POST['button_input'])){
		
		$sql = "insert into tableforcheck(username,password,fullname,age,address,email,mobile,nationality)
				values('".$_POST['add_username']."',
					'".$_POST['add_password']."',
					'".$_POST['add_fullname']."',
					'".$_POST['add_age']."'	,
					
					'".$_POST['add_address']."'	,	
					'".$_POST['add_email']."'	,	
					'".$_POST['add_mobile']."'	,	
					'".$_POST['add_nationality']."'
									
				)";
				
		if(mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn)))
			{
			header ('Location:index.php');	
			}
		else
			{
				
			echo ("Error Occured".mysqli_errno($conn));	
			}
		
		}	
?>

-->

<html>

<head>


<title>
Create Account
</title>


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



<body background="office-compilation.jpg" style="background-repeat:no-repeat;
background-size:contain;
background-position:center;
background-size: cover">


<div class="topnav">
  <a href="welcome.php">  Home</a>
  
  <a  href="govt_info.php">Government Information </a>
  <a href="electricity_portal.php">Electricity Portal</a>
  
  <a href="gas_portal.php">Gas Portal </a>
  <a href="water_portal.php">Water Portal</a>
  
  <a href="image_gallery.php">Image Gallery</a>
  <a href="login.php">Log-In</a>
  
  <a  class="active" href="add.php">Create Account</a>
  <a href="admin_panel.php">Admin Panel</a>
   <a href="contact_us.php">Contact us</a>
  
</div>







<h1 style="color:#FF6600; font:Verdana, Arial, Helvetica, sans-serif; font-size:36px; background-color: #CCCCCC" align="center"> Add User </h1> 

<div style="font-family:Verdana, Arial, Helvetica, sans-serif" align="center" class="my">


<form action="" method="post">
	<table bgcolor="#E6E1DF"  border="5"   style="font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif; color:#000066" width="900" height="400">
    	<tr>
        	<td align="center">User ID</td>
            <td align="center"><input  name="add_userid"></td>
        </tr>
		
		<tr>
        	<td align="center">Passowrd</td>
            <td align="center"><input placeholder="at least 8 Characters" name="add_password"></td>
        </tr>
		
		<tr>
        	<td align="center">First Name</td>
            <td align="center"><input name="add_firstname"></td>
        </tr>
		<tr>
        	<td align="center">Middle Name</td>
            <td align="center"><input name="add_middlename"></td>
        </tr>
		<tr>
        	<td align="center">Last Name</td>
            <td align="center"><input name="add_lastname"></td>
        </tr>
		<tr>
        	<td align="center">Fathers Name</td>
            <td align="center"><input name="add_fatherstname"></td>
        </tr>
		
		
		
		
		<tr>
        	<td align="center">Date of Birth</td>
            <td align="center"><input placeholder="Ex: 09-02-1997" name="add_agee"></td>
        </tr>
		
		
        <tr>
        	<td align="center">Email</td>
            <td align="center"><input placeholder="Ex: ****@gmail.com" name="add_email"></td>
        </tr>
		<tr>
        	<td align="center">NID Number</td>
            <td align="center"><input name="add_nid"></td>
        </tr>
		
		
		
		
		
		<tr>
        	<td align="center">Home No.</td>
            <td align="center"><input name="add_homwno"></td>
        </tr>
		<tr>
        	<td align="center">Street</td>
            <td align="center"><input name="add_street"></td>
        </tr>
		<tr>
        	<td align="center">Thana</td>
            <td align="center"><input name="add_thana"></td>
        </tr>
		<tr>
        	<td align="center">District</td>
            <td align="center"><input name="add_District"></td>
        </tr>
		<tr>
        	<td align="center">ZIP</td>
            <td align="center"><input name="add_zip"></td>
        </tr>
		
		
		
		
		
		
		
        <tr>
        	<td align="center">Mobile No.</td>
            <td align="center"><input  name="add_mobile"></td>
        </tr>
		<tr>
        	<td align="center">Maritual Status</td>
            <td align="center"><input placeholder="Optional" name="add_nationality"></td>
        </tr>
		
        <tr>
        	<td></td>
			
			
            <td align="center"><input style="height:50px; width:220px; font-size:25px; font-family: Verdana, Arial, Helvetica, sans-serif; background-color: #FF9966; border:thin;"  type="submit" name="button_input"></td>
        </tr>
    </table>
<form>

</div>



<br>

 



<img style="float:right; height:100px; width:100px" src="hourglass (5).gif">

</body>

</html>














