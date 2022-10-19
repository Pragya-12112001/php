<?php
$conn = mysqli_connect("localhost","root","","crud");

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
echo "connected succesfully <br>";

$sql="SELECT * FROM `student`";
$result = mysqli_query($conn,$sql);
echo mysqli_num_rows($result);

$num =mysqli_num_rows($result);
echo $num;
echo "<br>";
while($row = mysqli_fetch_assoc($result)){
    echo $row['s id']."&nbsp;".$row['s name']."&nbsp;".$row['s address']."&nbsp;".$row['s class']."&nbsp;".$row['s phone number '];
    echo "<br>";
}


?>