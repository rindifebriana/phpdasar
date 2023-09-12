<?php
$mahasiswa = [
          ["rindifebriana", "009876511", "Rekayasa Perangkat Lunak", "rindifeb@gmail.com"],
          ["jenirasekar", "009876212", "Teknik Kendaraan Ringan Otomotif", "jenirasekar@gmail.com"],
          ["retnoyuliani", "009876257", "Teknik Kendaraan Ringan Otomotif", "titanrby@gmail.com"],
];

?>
<!DOCTYPE html>
<html>
<head>
     <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
     <ul>
          <li>Nama : <?= $mhs[0]; ?></li>
          <li>NRP : <?= $mhs[1]; ?></li>
          <li>Jurusan : <?= $mhs[2]; ?></li>
          <li>Email : <?= $mhs[3]; ?></li>
     </ul>
<?php endforeach; ?>






        
</body>
</html>
