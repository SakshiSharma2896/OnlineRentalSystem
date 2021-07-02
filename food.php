<?php
session_start();
 $conn= mysqli_connect('Sakshi', 'root', '', 'ORS');
error_reporting(0);
//$query= "select * from food order by id desc limit 1";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid= $row['ID'];

if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{?>

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
td{ width: 200px;
height:100px;
text-align:center;
}
th{ 
text-align:center;
}
tr{ width: 100px;
height:50px;
text-align:center;
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
      <li style="font-size: 15px;margin-left: 20px; margin-right: 30px;color: white;"><a style="color: white;" href="CUPage.html">Home</a></li>
      <li><a style="font-size: 15px;margin-left: 100px;margin-right: 30px;color: white;" href="house.php">House</a></li>
     <li><a style="font-size: 15px;margin-left: 100px;margin-right: 30px;color: white;" href="vehicle.php">Vehicle</a></li>
     <li><a style="font-size: 15px;margin-left: 100px;margin-right: 30px;color: white;" href="luggage.php">Luggage</a></li>
      <li><a style="font-size: 15px;margin-left: 100px;margin-right: 30px;color: white;" href="CUlogin.php">Logout</a></li>
    </ul>
  </div>
</nav>
<form style="margin-top: 10px; margin-left:70px; margin-right:70px; margin-bottom:20px;" action='food.php' method=POST><font align="center">
  <br>
<?php
echo "<table border=10 bgcolor= 'white'>";
echo "	<tr>
<th>Food ID</th>
<th>Type</th>
<th>Time</th>
<th>Trial Cost</th>
<th>Cost</th>
<th>Address</th>
<th>Upload Document</th>
<th>Book Now?</th>
</tr>";
$query= "SELECT * from food";
$query_run= mysqli_query($conn, $query);
while($row= mysqli_fetch_array($query_run)){
$spid= $row['SPID'];
$foid= $row['ID'];
echo "<tr><td>";
echo $row['ID'];
echo "</td><td>";
echo $row['TYPE'];
echo "</td><td>";
echo $row['TIME'];
echo "</td><td>";
echo $row['TRIALCOST'];
echo "</td><td>";
echo $row['COST'];
echo "</td><td>";
echo $row['ADDRESS'];
echo "</td><td>";?>
<input type= "file" name="image">
<?php
echo "</td><td>";
echo "<input type= submit name=buy>";
echo "</td>";}
echo "</table>";

 if(isset($_POST['buy'])){
  $fid= $foid;
$cid= $_SESSION['cuid'];
$sid= $spid;
$image= addslashes($_FILES['image']['tmp_name']);
$name= addslashes($_FILES['image']['name']);
$image= file_get_contents($image);
$image= base64_encode($image);
 $stmt="insert into buyfood(FID,CID, SID,IMAGE)
	values('$fid','$cid','$sid',$image)";
$run=mysqli_query($conn,$stmt);
if($run)
{
echo '<script type= "text/javascript"> alert("Food booked successfully!") </script>';	
header('location: CUPage.html');
}
else
{
 echo"unsuccesful" .mysqli_error($conn);
}
}
}
?></font>
</form>
<div class="footer">
<center><p>Online Rental System © 2020</p></center>
</div>
</body>
</html>