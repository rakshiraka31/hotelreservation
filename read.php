<?php
include_once("config.php");
$result = mysqli_query($mysqli,"SELECT * FROM room ORDER BY id DESC"); 
if (!$result) die ("Database fetch failed: " . mysqli_error($mysqli));
?>

<html>
<head>	
	<title> view Reserved room</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<a href="index.html"> <h2>Enter here to Reserve the Room</h2></a>
	<br>
	
	<br>
	
	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
        <td>Date</td>
		<td>FirstName</td>
		<td>Gender</td>
		<td>Contact</td>
		<td>Room No.</td>
        <td>Room Type</td>
		<td>Payment</td>
	
	</tr>
	<?php 
		while ($row = mysqli_fetch_array($result)) {  
			echo "<tr>";
            echo "<td>".$row['daate']."</td>";
			echo "<td>".$row['fname']."</td>";
			echo "<td>".$row['gender']."</td>";
			echo "<td>".$row['contact']."</td>";
			echo "<td>".$row['room']."</td>";
			echo "<td>".$row['type']."</td>";
			echo "<td>".$row['payment']."</td>";
		
		}
	?>
	</table>
</body>
</html>
