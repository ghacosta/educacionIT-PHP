<?php
/*
for ($i=0; $i <= 9 ; $i++) { 
	echo "elemento $i";
}
echo "<br>WHILE<br>";
$j = 0;
while ($j <= 9) {
    echo $j++."<br>";
}

echo "<br>DO-WHILE<br>";
$k = 0;
do {
    echo $k;
} while ($k > 0);
*/
?>
<html>
<head>
	<title>Loops</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		echo "<ul>";
		for ($i=0; $i < 10; $i++) { 
			echo "<li>Elemento $i</li>";
		}
		echo "</ul>";

		echo "<table class='table'>";
		for ($i=0; $i < 6; $i++) {
			echo "<tr>";
			for ($j=0; $j < 8 ; $j++) { 
				$suma=$i+$j;
				if($suma%2==1) {
					echo "<td style='background-color:green'>$i - $j</td>";
				} else {
					echo "<td>$i - $j</td>";
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>