<?php
 $conn= mysqli_connect('Sakshi', 'root', '', 'ORS');
//error_reporting(0);
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
    if(isset($_POST['login'])){
	$cuid= $_POST['cuid'];
	$cupassword= $_POST['cupassword'];
	
	$query= "SELECT * FROM curegistration where CUID= '$cuid' && PASSWORD= '$cupassword'";
	$query_run= mysqli_query($conn, $query);
	$mysqli_result= mysqli_num_rows($query_run);
	if($mysqli_result>0){
		session_start();
		$field= mysqli_fetch_array($query_run);
		$_SESSION['cuid']= $field['CUID'];
		$_SESSION['cuname']= $field['NAME'];
		$_SESSION['cucontact']= $field['CONTACTNO'];
		$_SESSION['cuemail']= $field['EMAIL'];
                                   $_SESSION['cupassword']= $field['PASSWORD'];
			
		echo '<script type= "text/javascript"> alert("logged in successful") </script>';
		header('location: CUpage.html');
	}
	else{
	echo '<script type= "text/javascript"> alert("login failed!") </script>';	
	}
	
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Rental System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   height: 80px;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   padding: 35px;
}
a.new:link, a.new:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a.new:hover, a.new:active {
  background-color: red;
}
label{width:150px;
display: inline-block;
}
</style>
</head>
<body >
    <div class="header">
  <div class="media">
    <div class="media-left">
      <img src="images\rent.png" class="media-object" style="width:150px;height:150px;margin-right:70px; margin-left: 20px;" >
    </div>
    <div class="media-body">
      <h2 style="text-align: left;padding-top: 30px;text-decoration-color: ; "><font color="red" face="Algerian" size="10"><i>Online Rental System</font></i></h2>
    </div>
  </div>
  </div>
<nav style="background-color: #34A375;color: white;" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="font-size: 15px;color: white;margin-left: 40px;margin-right: 50px;" class="navbar-brand" href="#"><i>Live the life you want, now!</i></a>
    </div>
    <ul style="font-size: 15px;color: white;" class="nav navbar-nav">
      <li style="font-size: 15px;margin-left: 30px; margin-right: 30px;color: white;"><a style="color: white;" href="HomePage.html">Home</a></li>
      <li><a style="font-size: 15px;margin-left: 30px;margin-right: 30px;color: white;" href="rentalServices.html">Rent Service</a></li>
      <li><a style="font-size: 15px;margin-left: 30px;margin-right: 30px;color: white;" href="SPlogin.php">Advertise Service</a></li>
      <li><a style="font-size: 15px;margin-left: 30px;margin-right: 30px;color: white;" href="SPlogin.html">Service Provider login</a></li>
      <li><a style="font-size: 15px;margin-left: 30px;margin-right: 30px;color: white;" href="CUlogin.php">Customer login</a></li>
    </ul>
  </div>
</nav>
  <br>
<div align="center">
<h2 style="margin-top: 0px;"><font color="red" face="Garamond"><B><center>CUSTOMER LOGIN</font></B></center></h2>
 <form name="myform" method="post" action="CUlogin.php" >
<label><b><font size="5" color="red">ID</font></b></label>
<input type="text" placeholder="Enter ID" name="cuid" style="width:20%;height:30px" required><br><br>
<label><b><font size="5" color="red">PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password" name="cupassword" style="width:20%;height:30px" required><br>
<br><br>		
<button type="submit" name="login" >LOGIN</button><br><br>
<a href="CUregistration.php">SIGN IN?</a>
</form>
</div>
<div class="footer">
<center><p>Online Rental System © 2020</p></center>
</div>
</body>
</html>
