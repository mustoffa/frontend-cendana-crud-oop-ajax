<?php
	include_once "asset/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nilai</title>
</head>

<body>
<form action="detail_save.php" method="POST">
<table border="1">
	<thead>
		<tr>
			<th>Pelajaran</th>
			<th>Nilai</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $crud_nilai->edit(); ?>
	</tbody>
</table>
</form>
</body>
</html>