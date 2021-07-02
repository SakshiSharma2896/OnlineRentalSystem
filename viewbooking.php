<?php
session_start();
 $conn= mysqli_connect('Sakshi', 'root', '', 'ORS');
//error_reporting(0);
//$query= "select * from food order by id desc limit 1";
//$result= mysqli_query($conn,$query);
//$row = mysqli_fetch_array($result);
//$lastid= $row['ID'];

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
tr{ width: 100px;
height:50px;
text-align:center;
}
th{ 
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
      <a style="font-size: 15px;color: white;margin-left: 20px;margin-right: 50px;" class="navbar-brand" href="#"><i>Live the life you want, now!</i></a>
    </div>
    <ul style="font-size: 15px;color: white;" class="nav navbar-nav">
      <li style="font-size: 15px;margin-left: 10px; margin-right: 20px;color: white;"><a style="color: white;" href="CUPage.html">Home</a></li>
<li><a style="font-size: 15px;margin-left: 80px;margin-right: 30px;color: white;" href="house.php">House</a></li>      
<li><a style="font-size: 15px;margin-left: 80px;margin-right: 30px;color: white;" href="food.php">Food</a></li>
     <li><a style="font-size: 15px;margin-left: 80px;margin-right: 30px;color: white;" href="vehicle.php">Vehicle</a></li>
     <li><a style="font-size: 15px;margin-left: 80px;margin-right: 30px;color: white;" href="luggage.php">Luggage</a></li>
      <li><a style="font-size: 15px;margin-left: 80px;margin-right: 30px;color: white;" href="CUlogin.php">Logout</a></li>
    </ul>
  </div>
</nav>
<form style="margin-top: 10px; margin-bottom: 10px; margin-left:120px; margin-right:100px;" action="viewbooking.php" method= "POST">
  <br>
<font size="5"><b>HOUSE</b></font>
<?php

 echo "<table border=10 bgcolor= 'white'>";
echo "	<tr>
<th>House ID</th>
<th>No of Rooms</th>
<th>Rent (PerMonth)</th>
<th>Address</th>
<th>Description</th>
<th>Supplier ID</th>
</tr>";

echo "<tr><td>";
echo "H1";
echo "</td><td>";
echo "2";
echo "</td><td>";
echo "Rs. 3000";
echo "</td><td>";
echo "Nandan Van ";
echo "</td><td>";
echo "1 kitchen, 1 living room,1 bathroom,
cctv installed clean and green environment,
water supply-6 hours electricity supply-20 hours";
echo "</td><td>";
echo "SP1";
echo "</td>";
echo "</table>";
}
?>
<font size="5" ><b>FOOD</b></font>
<?php

 echo "<table border=10 bgcolor= 'white'>";
echo "	<tr>
<th>Food ID</th>
<th>Type</th>
<th>Time</th>
<th>TrialCost</th>
<th>Cost</th>
<th>Address</th>
<th>Supplier ID</th>
</tr>";

echo "<tr><td>";
echo "F1";
echo "</td><td>";
echo "veg";
echo "</td><td>";
echo "lunch";
echo "</td><td>";
echo "Rs. 100";
echo "</td><td>";
echo "Rs. 3000";
echo "</td><td>";
echo "Nandan Van ";
echo "</td><td>";
echo "SP1";
echo "</td>";
echo "</table>";

?>

<font size="5" ><b>VEHICLE</b></font>
<?php

 echo "<table border=10 bgcolor= 'white'>";
echo "	<tr>
<th>Vehicle ID</th>
<th>Category</th>
<th>Cost</th>
<th>Address</th>
<th>Supplier ID</th>
</tr>";

echo "<tr><td>";
echo "V1";
echo "</td><td>";
echo "bike";
echo "</td><td>";
echo "Rs. 500";
echo "</td><td>";
echo "Nandan Van ";
echo "</td><td>";
echo "SP1";
echo "</td>";
echo "</table>";

?>

<font size="5" ><b>LUGGAGE</b></font>
<?php

 echo "<table border=10 bgcolor= 'white'>";
echo "	<tr>
<th>Luggage ID</th>
<th>Cost</th>
<th>Address</th>
<th>Supplier ID</th>
</tr>";

echo "<tr><td>";
echo "L1";
echo "</td><td>";
echo "Rs. 1000";
echo "</td><td>";
echo "Nandan Van ";
echo "</td><td>";
echo "SP1";
echo "</td>";
echo "</table>";

?>
</font>
</form>
<div class="footer">
<center><p>Online Rental System © 2020</p></center>
</div>
</body>
</html>
