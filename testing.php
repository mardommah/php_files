<?php
	function test(){
		echo "Testing";
	};

	test();

	for($i=0;$i<5;$i++){
		echo "<br>$i";
	};

	// create array
	echo "<br>";
	$hari = ["Senin", "Selasa", "Rabu"];
	var_dump($hari);

	// menambahkan elemen baru diakhir array 
	$hari[] = "Kamis";
	echo "<br>";
	print($hari);
?>