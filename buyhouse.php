<?php
session_start();
 $conn= mysqli_connect('Sakshi', 'root', '', 'ORS');
//error_reporting(0);
if(!$conn)
{
	die('connection failed : '.$conn->connect_error);
}
else
{
 if(isset($_POST['submit'])){
  $hid= $_POST['ID'];
$cid= $_SESSION['CUID'];
$sid= $_SESSION['SPID'];
echo "$hid $cid $sid";
 $stmt="insert into buyhouse(HID,CID, SID)
	values('$hid','$cid','$sid')";
$run=mysqli_query($conn,$stmt);
if($run)
{
echo '<script type= "text/javascript"> alert("House booked successfully!") </script>';	
header('location: house.php');
}
else
{
 echo"unsuccesful" .mysqli_error($conn);
}
}}
?>