<?php
//databse connection
$conn= mysqli_connect('Sakshi', 'root', '', 'ORS');
error_reporting(0);
$query= "select * from curegistration order by cuid desc limit 1";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid= $row['CUID'];
if($lastid == ""){
	$empid= "CU1";
}
else{
	$empid= substr($lastid,2);
	$empid= intval($empid);
	$empid= "CU" . ($empid + 1);
}
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		$cuid= $_POST['cuid'];
$cuname= $_POST['cuname'];
$cucontact= $_POST['cucontact'];
$cuemail= $_POST['cuemail'];
$cupassword= $_POST['cupassword'];
$cucpassword= $_POST['cucpassword'];

	if($cupassword==$cucpassword){
	$stmt="insert into curegistration(CUID,NAME,CONTACTNO,EMAIL,PASSWORD)
	values('$cuid', '$cuname','$cucontact','$cuemail','$cupassword')";
	$run=mysqli_query($conn,$stmt);
if($run)
{
header('location: culogin.php');
}
else
{
 echo"unsuccesful" .mysqli_error($conn);
}
	$closeconn= mysqli_close($conn);
	}
	else{
		echo '<script type= "text/javascript"> alert("Password not matched!") </script>';	;
	}
}}
?>


<html>
<head>
<title>CUSTOMER REGISTRATION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <style>

.footer {
   position: variable;
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
<body link="green" alink="white" vlink="red">
  <div class="header">
  <div class="media">
    <div class="media-left">
      <img src="images\rent.png" class="media-object" style="width:150px;height:150px;margin-right:70px; margin-left: 20px; margin-top: -10px" >
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
<h2 style="margin-top: 0px;"><font color="red" face="Garamond"><center>CUSTOMER REGISTRATION</font></center></h2>
<div align="center">
<form action="CUregistration.php" method="post">
<label><b><font size="3">CUSTOMER ID</font></b></label>
<input type="text" placeholder="Enter ID" name="cuid" style="width:30%;height:30px" value="<?php echo $empid; ?>" readonly ><br><br>
<label><b><font size="3">NAME</font></b></label>
<input type="text" placeholder="Enter Name" name="cuname" style="width:30%;height:30px" required><br><br>
<label><b><font size="3">CONTACT No</font></b></label>
<input type="number" placeholder="Enter Contact No" name="cucontact" style="width:30%;height:30px" required><br><br>
<label><b><font size="3">EMAIL</font></b></label>
<input type="email" placeholder="Enter Email ID" name="cuemail" style="width:30%;height:30px" required><br>
<br>
<label><b><font size="3">PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password" name="cupassword" style="width:30%;height:30px" required><br>
<label><b><font size="3">CONFIRM PASSWORD</font></b></label>
<input type="password" placeholder="Enter Password Again" name="cucpassword" style="width:30%;height:30px" required><br>
<br>		
<br>
<button type="submit" name="register" >REGISTER</button><br><br>
Already Registered?<a href="culogin.php">LOGIN</a>
</form>
</div>
<div class="footer">
<center><p>Online Rental System © 2020</p></center>
</div>
</body>
</html>
