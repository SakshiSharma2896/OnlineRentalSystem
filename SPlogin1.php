<!--first page-->
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
	$spid= $_POST['spid'];
	$sppassword= $_POST['sppassword'];
	
	$query= "SELECT * FROM spregistration where SPID= '$spid' && PASSWORD= '$sppassword'";
	$query_run= mysqli_query($conn, $query);
	$mysqli_result= mysqli_num_rows($query_run);
	if($mysqli_result>0){
		session_start();
		$field= mysqli_fetch_array($query_run);
		$_SESSION['spid']= $field['SPID'];
		$_SESSION['spname']= $field['NAME'];
		$_SESSION['spcontact']= $field['CONTACTNO'];
		$_SESSION['spemail']= $field['EMAIL'];
                                   $_SESSION['sppassword']= $field['PASSWORD'];
			
		echo '<script type= "text/javascript"> alert("logged in successful") </script>';
		header('location: SPpage.php');
	}
	else{
	echo '<script type= "text/javascript"> alert("login failed!") </script>';	
	}
	
}
}
?>
