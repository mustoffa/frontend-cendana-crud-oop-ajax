<?php
	include_once "asset/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>

<body>
<form action="index.php" method="GET">
	<input type="text" name="search" value="<?php error_reporting(0); $_GET['search'] ?>">
	<input type="submit" value="cari">
</form>

<a href="add.php">Tambah Data</a>

<table border="1">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Kelamin</th>
			<th>Alamat</th>
			<th colspan="3">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $crud_siswa->show(); ?>
	</tbody>
</table>
</body>
</html>