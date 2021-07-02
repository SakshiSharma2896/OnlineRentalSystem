<!--first page-->

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
.ab{
    height:230px;
    background-color: white;
    width:25%;
    float:left;
    text-align: center;
    font-size: 20px;
  }
 a.dis:link, a.dis:visited {
  background-color: white;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a.dis:hover, a.dis:active {
  background-color: white;
  color: grey;
}

</style>
</head>
<body >
    <div class="header">
  <div class="media">
    <div class="media-left">
      <img src="images\rent.png" class="media-object" style="width:150px;height:150px;margin-right:70px; margin-left: 20px; margin-top: -10px;" >
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
      <li style="font-size: 15px;margin-left: 30px; margin-right: 30px;color: white;"><a style="color: white;" href="HomePage.html">Home</a></li>
      <li><a style="font-size: 15px;margin-left: 30px;margin-right: 30px;color: white;" href="rentalServices.html">Rent Service</a></li>
      <li><a style="font-size: 15px;margin-left: 30px;margin-right: 30px;color: white;" href="SPlogin.php">Advertise Service</a></li>
      <li><a style="font-size: 15px;margin-left: 30px;margin-right: 30px;color: white;" href="SPlogin.html">Service Provider login</a></li>
      <li><a style="font-size: 15px;margin-left: 30px;margin-right: 30px;color: white;" href="CUlogin.php">Logout</a></li>
    </ul>
  </div>
</nav>
  <br>
  <div class="b" style="padding-left: 15px;font-family: garamond;font-size: 20px; "><font color="#0922AB"><b><p>You can select the services listed below as per your requirement. Fill in the required feild for each service and get customized advertisement in result.</p></div>
</b></font>
  <div  class="ab">       
<a class="dis" href="housingadv.php"><img src="images/home1.png" class="rounded-circle"  alt="house" width="120" height="120"> 
 </a> <br>
  <p> <a class="dis" href="housingadv.php">Housing </a> </p>
  </div>
  <div  class="ab"> 
  <a class="dis" href="foodadv.php"><img src="images/food.jpg" class="rounded-circle" alt="food width="120" height="120">
  </a><br>
  <p> <a class="dis" href="foodadv.php">Food </a></p>
  </div>
  <div  class="ab"> 
   <a class="dis" href="vehicleadv.php"><img src="images/vehicle.png" class="rounded-circle" alt="car" width="120" height="120">
 </a> <br>
  <p> <a class="dis" href="vehicleadv.php">Vehicle</a></p>
  </div>
  <div  class="ab"> 
  <a class="dis" href="luggageadv.php"><img src="images/images.png" class="rounded-circle" alt="luggage" width="120" height="120">
  </a><br>
  <p > <a class="dis" href="luggageadv.php">Luggage </a></p>
  </div>
</div> 
<div class="footer">
<center><p>Online Rental System© 2020</p></center>
</div>
</body>
</html>
