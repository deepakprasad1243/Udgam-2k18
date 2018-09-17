<?php

include 'connect.php';
$band=$_POST['band'];
$city=$_POST['city'];
$email=$_POST['email'];
$genre=$_POST['genre'];
$contact=$_POST['mcont'];
$manager=$_POST['mname'];
$fblink=$_POST['fblink'];
$olink=$_POST['olink'];

$member = $_POST['name'];

$pushable="";

for($test = 0; $test <count($member); $test++)
{  
    $pushable=$pushable.$member[$test];
	  $pushable=$pushable.'+';	
}

$sql="INSERT INTO `registration` (`band`, `city`, `email`, `genre`, `member`, `manager`, `contact`, `fblink`, `olink`) VALUES ('$band', '$city', '$email', '$genre', '$pushable', '$manager', '$contact', '$fblink', '$olink')";
if(!mysqli_query($db,$sql)){
echo "not inserted";

}

?>
<html>
<script type="text/javascript">location.href = 'H_V.php';</script>
</html>
