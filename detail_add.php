<?php
include_once "asset/koneksi.php";
$id_siswa = $_GET['id_siswa'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<form action="detail_add_save.php" method="POST">
	<input type="text" name="id_siswa" value="<?php echo $id_siswa; ?>" hidden="true">
	<label>Pelajaran</label>
	<select name="pelajaran">
	<?php 
	$sql = mysql_query("select * from matpel");
	while($data = mysql_fetch_array($sql)){ ?>
		<option value="<?php echo $data['id_matpel']; ?>"><?php echo $data['pelajaran']; ?></option>
	<?php } ?>
	</select><br>
	<label>Nilai</label>
	<input type="text" name="nilai"><br>
	<input type="submit" value="Simpan">
</form>
</body>
</html>