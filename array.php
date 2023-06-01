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

<html>
  <head>
    <title>Testing Mahasiswa</title>
  </head>
  <body>
  <?php
  $test = [
    ["Test", 123, "asasas"],
    ["testing", "456", True]
  ];
  ?>
  <h2>Data Mhs</h2>
  <?php foreach($test as $mhs) : ?>
  <ul>
    <li><?php echo $mhs[0];?></li>
    <li><?php echo $mhs[1];?></li>
    <li><?php echo $mhs[2];?></li>
  </ul>
  <?php endforeach; ?>
  </body>
</html>