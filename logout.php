<?php

$con = mysqli_connect('localhost','root','','mysql');
$sql = "DELETE FROM cluster";
mysqli_query($con,$sql);
include ("home.html");
mysqli_close($con);

?>