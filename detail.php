<?php
	include_once "asset/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nilai</title>
</head>

<body>
<a href="detail_add.php?id_siswa=<?php echo $_GET['id_siswa']; ?>">Tambah Nilai</a><br>
<table border="1">
	<thead>
		<tr>
			<th>Pelajaran</th>
			<th>Nilai</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $crud_nilai->show(); ?>
	</tbody>
</table>
<a href="index.php">Kembali</a>
</body>
</html>