<?php
 $s_id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql="DELETE  FROM student WHERE sid={$s_id}";
$result= mysqli_query($conn,$sql) or die(":-( !!");
header("Location: http://localhost/crud/index.php");
mysqli_close($conn);
?>