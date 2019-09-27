<?php
$var1 = $_GET['eid'];
$var2 =  $_GET['epass'];
$var = $var1.".html";
$flag = 0;
$con=mysqli_connect('localhost','root','','mysql');

$result = mysqli_query($con,"SELECT * FROM employee");

while ($array = mysqli_fetch_array($result))
{
	if(($array['emp_id'] == $var1)&& ($array['emp_pass'] == $var2 ))  
	{
		echo'<a href='.$var.'>Go</a>';
		
		$flag = 1;
	}	
}
if($flag == 0)
	echo"Fake user";

mysqli_close($con);
?>