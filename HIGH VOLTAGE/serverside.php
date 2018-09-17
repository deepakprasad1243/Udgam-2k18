
<html>

<body>
<form action="" method="post">
<input type="text" name="pass">
<input type="submit" name="submit" value="ok">
</body>
</form>
</html>
<?php

if(isset($_POST['submit'])){

include 'connect.php';
$sql="SELECT * FROM `registration`";
if($_POST['pass']=="high"){

if ($result=mysqli_query($db,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s  %s  %s  %s  %s  %s  %s  %s %s",$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
	echo '<br>';
	
    }
  // Free result set
  mysqli_free_result($result);
}

echo '<br>';echo '<br>';

$sql="SELECT * FROM `feedback`";

if ($result=mysqli_query($db,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s %s %s",$row[0],$row[1],$row[2]);
	echo '<br>';
	
    }
  // Free result set
  mysqli_free_result($result);
}
}
else echo'FUCK OFF';
}
?>
