<?php
ini_set('max_execution_time', 300);
$var1 = $_GET['c1min_a'];
$var2 = $_GET['c1max_a'];
$var3 = $_GET['c1min_b'];
$var4 = $_GET['c1max_b'];
$var5 = $_GET['c2min_a'];
$var6 = $_GET['c2max_a'];
$var7 = $_GET['c2min_b'];
$var8 = $_GET['c2max_b'];
$var9 = $_GET['c3min_a'];
$var10 = $_GET['c3max_a'];
$var11= $_GET['c3min_b'];
$var12 = $_GET['c3max_b'];

$con=mysqli_connect('localhost','root','','mysql');




echo"<table border = '1' width='1200px' solid black><tr><td>ID</td><td>SATISFACTION LEVEL</td><td>LAST EVALUATION</td><td>PROJECT NUMBER</td><td>AVERAGE MONTHLY HOURS</td><td>TIME SPEND COMPANY</td><td>WORK ACCIDENT</td><td>LEFT COMPANY</td><td>PROMOTION LAST 5 YEARS</td><td>SALES</td><td>SALARY</td></tr>";

$sql1 = "SELECT * FROM mytable WHERE left_company = 0 AND satisfaction_level > '".$var1."' AND satisfaction_level < '".$var2."' AND average_montly_hours > '".$var3."' AND average_montly_hours < '".$var4."'";

$sql2 = "SELECT * FROM mytable WHERE left_company = 0 AND satisfaction_level > '".$var5."' AND satisfaction_level < '".$var6."' AND average_montly_hours > '".$var7."' AND average_montly_hours < '".$var8."'";

$sql3 = "SELECT * FROM mytable WHERE left_company = 0 AND satisfaction_level > '".$var9."' AND satisfaction_level < '".$var10."' AND average_montly_hours > '".$var11."' AND average_montly_hours < '".$var12."'"; 

$result1 = mysqli_query($con,$sql1);
if(mysqli_num_rows($result1)>0)
{
	while($row= mysqli_fetch_array($result1))
	{
		echo"<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['satisfaction_level']."</td>";
		echo "<td>".$row['last_evaluation']."</td>";
		echo "<td>".$row['number_project']."</td>";
		echo "<td>".$row['average_montly_hours']."</td>";
		echo "<td>".$row['time_spend_company']."</td>";
		echo "<td>".$row['Work_accident']."</td>";
		echo "<td>".$row['left_company']."</td>";
		echo "<td>".$row['promotion_last_5years']."</td>";
		echo "<td>".$row['sales']."</td>";
		echo "<td>".$row['salary']."</td></tr>";
		$v1 = $row['id'];
		$v2 = $row['satisfaction_level'];
		$v3 = $row['last_evaluation'];
		$v4 = $row['number_project'];
		$v5 = $row['average_montly_hours'];
		$v6 = $row['time_spend_company'];
		$v7 = $row['Work_accident'];
		$v8 = $row['left_company'];
		$v9 = $row['promotion_last_5years'];
		$v10 = $row['sales'];
		$v11 = $row['salary'];
		$sql1 = "INSERT INTO cluster VALUES('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11')";
		$res1 = mysqli_query($con,$sql1);
	}
}

$result2 = mysqli_query($con,$sql2);
if(mysqli_num_rows($result2)>0)
{
	while($row= mysqli_fetch_array($result2))
	{
		echo"<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['satisfaction_level']."</td>";
		echo "<td>".$row['last_evaluation']."</td>";
		echo "<td>".$row['number_project']."</td>";
		echo "<td>".$row['average_montly_hours']."</td>";
		echo "<td>".$row['time_spend_company']."</td>";
		echo "<td>".$row['Work_accident']."</td>";
		echo "<td>".$row['left_company']."</td>";
		echo "<td>".$row['promotion_last_5years']."</td>";
		echo "<td>".$row['sales']."</td>";
		echo "<td>".$row['salary']."</td></tr>";
		$v1 = $row['id'];
		$v2 = $row['satisfaction_level'];
		$v3 = $row['last_evaluation'];
		$v4 = $row['number_project'];
		$v5 = $row['average_montly_hours'];
		$v6 = $row['time_spend_company'];
		$v7 = $row['Work_accident'];
		$v8 = $row['left_company'];
		$v9 = $row['promotion_last_5years'];
		$v10 = $row['sales'];
		$v11 = $row['salary'];
		$sql2 = "INSERT INTO cluster VALUES('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11')";
		$res2 = mysqli_query($con,$sql2);
	}
}

$result3 = mysqli_query($con,$sql3);
if(mysqli_num_rows($result3)>0)
{
	while($row= mysqli_fetch_array($result3))
	{
		echo"<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['satisfaction_level']."</td>";
		echo "<td>".$row['last_evaluation']."</td>";
		echo "<td>".$row['number_project']."</td>";
		echo "<td>".$row['average_montly_hours']."</td>";
		echo "<td>".$row['time_spend_company']."</td>";
		echo "<td>".$row['Work_accident']."</td>";
		echo "<td>".$row['left_company']."</td>";
		echo "<td>".$row['promotion_last_5years']."</td>";
		echo "<td>".$row['sales']."</td>";
		echo "<td>".$row['salary']."</td></tr>";
		$v1 = $row['id'];
		$v2 = $row['satisfaction_level'];
		$v3 = $row['last_evaluation'];
		$v4 = $row['number_project'];
		$v5 = $row['average_montly_hours'];
		$v6 = $row['time_spend_company'];
		$v7 = $row['Work_accident'];
		$v8 = $row['left_company'];
		$v9 = $row['promotion_last_5years'];
		$v10 = $row['sales'];
		$v11 = $row['salary'];
		$sql3 = "INSERT INTO cluster VALUES('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11')";
		$res3 = mysqli_query($con,$sql3);
	}
}
echo"</table>";

mysqli_close($con);



?>

