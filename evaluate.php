<?php
$var1 = $_GET['evaluate'];
$var2 = $_GET['choose'];


$con = mysqli_connect('localhost','root','','mysql');

echo"<table border = '1' width='1200px' solid black><tr><td>ID</td><td>SATISFACTION LEVEL</td><td>LAST EVALUATION</td><td>PROJECT NUMBER</td><td>AVERAGE MONTHLY HOURS</td><td>TIME SPEND COMPANY</td><td>WORK ACCIDENT</td><td>LEFT COMPANY</td><td>PROMOTION LAST 5 YEARS</td><td>SALES</td><td>SALARY</td></tr>";

$sql = "SELECT * FROM cluster WHERE last_evaluation > '".$var1."' AND sales = '".$var2."'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row= mysqli_fetch_array($result))
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
		
	}
}
mysqli_close($con);
?>