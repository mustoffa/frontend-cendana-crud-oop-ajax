<?php
	include_once "asset/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nilai</title>
</head>

<body>
<form action="edit_save.php" method="POST">
<table border="1">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Kelamin</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $crud_siswa->edit(); ?>
	</tbody>
</table>
<a href="index.php">Kembali</a>
</form>
</body>
</html>