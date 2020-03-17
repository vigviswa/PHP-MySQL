
<?php
session_start();

$year = $_GET["year"];
$gender = $_GET["gender"];

$conn = mysqli_connect("localhost", "root", "root", "HW3");

	if(!$conn){

		echo "Database connection failed!";
	}
	else{

		

		if($gender == 'b' && $year == 2000){
		$sql = "SELECT * FROM BabyNames ORDER BY year, gender, ranking";
		}
		else if($gender == 'b' && $year!=2000){
			$sql = "SELECT * FROM BabyNames WHERE year = $year ORDER BY year, gender, ranking";
		}
		else if($gender != 'b' && $year == 2000){
			
			$sql = "SELECT * FROM BabyNames WHERE gender = '$gender' ORDER BY year, gender, ranking";
		}
		else{
			$sql = "SELECT * FROM BabyNames WHERE year = $year AND gender = '$gender' ORDER BY year, gender, ranking";
		}

		$result = mysqli_query($conn, $sql);
		
			echo "<table style = 'border:10px solid black; width: 50%;'  border = 1><tr><th>Firstname</th><th>Year</th><th>Ranking</th><th>Gender</th></tr>";
			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['year'] . "</td>";
			echo "<td>" . $row['ranking'] . "</td>";
			echo "<td>" . $row['gender'] . "</td>";
			echo "</tr>";
		}
			echo "</table>";
	}
?>
</html>
