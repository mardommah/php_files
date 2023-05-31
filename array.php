<?php
	$angka = [1,2,3,4,5];

	for($i = 0; $i < count($angka); $i++){
		echo "$angka[$i]<br>";
	};

	echo "<br>";

	// menggunakan foreach
	foreach ($angka as $number) {
		echo "$number <br>";
	};

?>