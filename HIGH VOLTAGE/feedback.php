<?php

include 'connect.php';
$name= $_POST['name'];
$email= $_POST['email'];
$message=$_POST['message'];
$sql="INSERT INTO `feedback` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
if(!mysqli_query($db,$sql)){
echo "not inserted";

}

?>
<html>
<script type="text/javascript">location.href = 'H_V.php';</script>
</html>
