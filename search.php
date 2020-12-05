<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
</head>
<body>

	<?php
		$button = $_GET['submit'];
		$search = $_GET['search'];

		$connect = mysqli_connect('localhost', 'root', '', 'universities');

		$query = "SELECT DISTINCT major FROM university WHERE MATCH(major) AGAINST ('%" . $search . "%')";

		$result = mysqli_query($connect, $query);
		$num = mysqli_num_rows($result);

		if($num == 0){
			echo "<b>$search</b> not found, search again";
		}
		else{
			echo "<h1><strong> $num Results Found for \"" .$search."\" </strong></h1>";

			$query = "SELECT DISTINCT major FROM university WHERE MATCH(major) AGAINST ('%" . $search . "%')";
			$getquery = mysqli_query($connect, $query);

			while($runrows = mysqli_fetch_array($getquery)){
				echo "<h5 class='card-title'>". $runrows["major"] ."</h5>";
			}
		}

		mysqli_close($connect);
	?>

</body>
</html>