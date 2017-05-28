<?php
$var1 = $_GET['mid'];
$var2 =  $_GET['mpass'];
$var = $var1.".html";
$flag = 0;
$con=mysqli_connect('localhost','root','','mysql');
/*if(!$con)
{
	die("Failed to connect".mysqli_connect_error());
}*/
$result = mysqli_query($con,"SELECT * FROM manager");

while ($array = mysqli_fetch_array($result))
{
	if(($array['man_id'] == $var1)&& ($array['man_pass'] == $var2 ))  
	{
		echo'<a href='.$var.'>Go</a>';
		
		$flag = 1;
	}	
}
if($flag == 0)
	echo"Fake user";

mysqli_close($con);
?>


