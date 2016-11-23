<?php
include_once 'asset/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>

<body>
<form action="add_save.php" method="POST">
	<label>Nama : </label>
	<input type="text" name="nama"><br>
	<label>Kelamin : </label>
	<input type="radio" name="jenkel" value="L">
	<input type="radio" name="jenkel" value="P"><br>
	<label>Alamat : </label>
	<input type="text" name="alamat"><br>
	<input type="submit" value="Simpan">
</form>
</body>
</html>