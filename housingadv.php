<?php
session_start();
 $conn= mysqli_connect('Sakshi', 'root', '', 'ORS');
//error_reporting(0);
$query= "select * from housing order by id desc limit 1";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid= $row['ID'];
if($lastid == ""){
	$empid= "H1";
}
else{
	$empid= substr($lastid,1);
	$empid= intval($empid);
	$empid= "H" . ($empid + 1);
}
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
    if($_SERVER["REQUEST_METHOD"]== "POST"){
	$hid= $_POST['hid'];
                 $hnor= $_POST['hnor'];
                 $hrent= $_POST['hrent'];
                  $haddress= $_POST['haddress'];
                  $description= $_POST['description'];
                  $spid=$_SESSION['spid'];
                 $stmt="insert into housing(ID,NOOFROOMS,RENTPERMONTH,ADDRESS, DESCRIPTION, SPID)
	values('$hid','$hnor','$hrent','$haddress', '$description','$spid')";
$run=mysqli_query($conn,$stmt);
if($run)
{
echo '<script type= "text/javascript"> alert("Housing advertisment added successfully!") </script>';	
header('location: SPpage.php');
}
else
{
 echo"unsuccesful" .mysqli_error($conn);
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
<body >
    <div class="header">
  <div class="media">
    <div class="media-left">
      <img src="images\rent.png" class="media-object" style="width:150px;height:150px;margin-right:70px; margin-left: 20px; margin-top: -10px" >
    </div>
    <div class="media-body">
      <h2 style="text-align: left;padding-top: 20px;text-decoration-color: ; "><font color="red" face="Algerian" size="10"><i>Online Rental System</font></i></h2>
    </div>
  </div>
  </div>
<nav style="background-color: #34A375;color: white;" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="font-size: 15px;color: white;margin-left: 40px;margin-right: 50px;" class="navbar-brand" href="#"><i>Live the life you want, now!</i></a>
    </div>
    <ul style="font-size: 15px;color: white;" class="nav navbar-nav">
      <li style="font-size: 15px;margin-left: 150px; margin-right: 30px;color: white;"><a style="color: white;" href="SPpage.html">Home</a></li>
      <li><a style="font-size: 15px;margin-left: 200px;margin-right: 30px;color: white;" href="SPlogin.php">Advertise Service</a></li>
     
      <li><a style="font-size: 15px;margin-left: 200px;margin-right: 30px;color: white;" href="CUlogin.php">Logout</a></li>
    </ul>
  </div>
</nav>
  
<h2><center><font style="margin-top:20px;">Create Housing Advertisement</h2></center>
<div align="center">
 <form name="myform" method="post" action="housingadv.php" >
<label><b><font size="5" color="red">ID</font></b></label>
<input type="text" placeholder="Enter ID" name="hid" style="width:20%;height:30px" value="<?php echo $empid; ?>"  readonly><br><br>
 <label ><b><font size="5" color="red">No. of rooms</font></b></label>
<input type="number" placeholder="Enter No of rooms" name="hnor" style="width:20%;height:30px" min="1" max="10" required><br><br>
<label ><b><font size="5" color="red">Rent Per Month</font></b></label>
<input type="number" placeholder="Enter Rent" name="hrent" style="width:20%;height:30px" min="500" required><br><br>
<label ><b><font size="5" color="red">Address</font></b></label>
<input type="text" placeholder="Enter Address" name="haddress" style="width:20%;height:30px"  required><br><br>
<label><b><font size="5" color="red" >Description</font></b></label>
<textarea rows="10" cols="40" placeholder="Enter the description of the house....." name="description" style="margin-left: 20px;">
</textarea><br><br>
<button type="submit" name="add" >CREATE</button><br><br>
</form>
</div>

<div class="footer">
<center><p>Online Rental System © 2020</p></center>
</div>
</body>
</html>
