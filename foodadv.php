<?php
session_start();
 $conn= mysqli_connect('Sakshi', 'root', '', 'ORS');
//error_reporting(0);
$query= "select * from food order by id desc limit 1";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid= $row['ID'];
if($lastid == ""){
	$empid= "F1";
}
else{
	$empid= substr($lastid,1);
	$empid= intval($empid);
	$empid= "F" . ($empid + 1);
}
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
    if($_SERVER["REQUEST_METHOD"]== "POST"){
	$fid= $_POST['fid'];
                  $ftype= $_POST['ftype'];
                   $ftime= $_POST['ftime'];
                    $ftrialcost= $_POST['ftrialcost'];
                   $fcost= $_POST['fcost'];
                    $faddress= $_POST['faddress'];
                  $spid=$_SESSION['spid'];
                 $stmt="insert into food(ID, TYPE,TIME,TRIALCOST,COST,ADDRESS, SPID)
	values('$fid', '$ftype','$ftime','$ftrialcost','$fcost','$faddress','$spid')";
$run=mysqli_query($conn,$stmt);
if($run)
{
echo '<script type= "text/javascript"> alert("Food advertisment added successfully!") </script>';	
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
      <li style="font-size: 15px;margin-left: 150px; margin-right: 30px;color: white;"><a style="color: white;" href="HomePage.html">Home</a></li>
      <li><a style="font-size: 15px;margin-left: 200px;margin-right: 30px;color: white;" href="SPlogin.php">Advertise Service</a></li>
     
      <li><a style="font-size: 15px;margin-left: 200px;margin-right: 30px;color: white;" href="CUlogin.php">Logout</a></li>
    </ul>
  </div>
</nav>
  <br>
<h2><center><font style="margin-top:20px;">Create Food Advertisement</h2></center>
<div align="center">
 <div align="center">
 <form name="myform" method="post" action="foodadv.php" >
<label><b><font size="5" color="red">ID</font></b></label>
<input type="text" placeholder="Enter ID" name="fid" style="width:20%;height:30px" value="<?php echo $empid; ?>"  readonly><br><br>
 <label ><b><font size="5" color="red">Type</font></b></label>
<input type="radio" name="ftype" value="veg" style="margin-left: 20px; margin-right:20px;"required>Veg
<input type="radio" name="ftype" value="non-veg" style="margin-left: 20px; margin-right:20px;" required>Non-Veg
<input type="radio" name="ftype" value="mixed" style="margin-left: 15px; margin-right:20px;" required>Mixed<br><br>
<label ><b><font size="5" color="red">Time</font></b></label>
<input type="radio" name="ftime" value="lunch" style="margin-left: 60px; margin-right:10px;" required>Lunch
<input type="radio" name="ftime" value="dinner" style="margin-left: 60px; margin-right:10px;" required>Dinner
<br><br>
<label ><b><font size="5" color="red">Trial Cost</font></b></label>
<input type="text" placeholder="Enter trial cost" name="ftrialcost" style="width:20%;height:30px"  required><br><br>
<label><b><font size="5" color="red" >Cost(per month)</font></b></label>
<input type="text" placeholder="Enter cost of food " name="fcost" style="width:20%;height:30px"  required><br><br>
<label><b><font size="5" color="red" >Address</font></b></label>
<input type="text" placeholder="Enter address " name="faddress" style="width:20%;height:30px"  required><br><br>

<button type="submit" name="add" >CREATE</button><br><br>
</form>
</div>
</div>
<div class="footer">
<center><p>Online Rental System © 2020</p></center>
</div>
</body>
</html>
