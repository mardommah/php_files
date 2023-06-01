<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- array associative adalah key(di devinisikan sendiri) : value -->
  <?php
    // membuat array asociative
    $biodata = [
      [
        "Nama" => "Testing",
        "Kelas" => 100,
        "email" => "asasaaada@google.com"
      ],
      [
        "Nama" => "acumalaka",
        "Kelas" => 10000,
        "email" => "awoskoskok@google.com",
        "Nilai" => [
          "Mtk" => 90,
          "Bhs" => 100
        ]
      ]
    ];

    // testing cetak 
    echo $biodata[1]["Nama"];
    echo "<br>";
    echo $biodata[1]["Nilai"]["Mtk"];
  ?>
  <!-- show on looping -->

  <?php foreach ($biodata as $bio) : ?>
    <ul>
      <li>Nama: <?= $bio["Nama"];?></li>
      <li>Kelas: <?= $bio["Kelas"];?></li>
      <li>Email: <?= $bio["email"];?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>