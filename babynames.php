
<?php
session_start();
echo '
<h1> Popular BabyNames Through 2005 - 2015 </h1>';
echo '
<form action="babynames.php" method="POST">
    <fieldset>
      <legend>Selecting the Filters</legend>
      <p>
        <label>Select year</label>
        <select id="myYear" name="year">
          <option value="2000">All Years</option>
          <option value="2005">2005</option>
          <option value="2006">2006</option>
          <option value="2007">2007</option>
          <option value="2008">2008</option>
          <option value="2009">2009</option>
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
        </select>
        <label>Select the Gender</label>
        <select id="myGender" name="gender">
          <option value="b">Both Genders</option>
          <option value="m">Male</option>
          <option value="f">Female</option>
        </select>
      </p>
    </fieldset>
    <input type="submit" value="Submit" />
  </form>
';

$year = $_POST["year"];
$gender = $_POST["gender"];

$conn = mysqli_connect("localhost", "root", "root", "HW3");

	if(!$conn){

		echo "Database connection failed!";
	}
	else{

		// $sql = "SELECT * FROM BabyNames WHERE username='$username' AND password='$password'";
		

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
