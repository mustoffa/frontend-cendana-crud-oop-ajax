<?php
interface Crud{
	public function show();
	public function create();
	public function edit();
	public function update();
	public function delete();
}

class CrudSiswa implements Crud{
	public function show(){
		$sql = "select * from siswa";
		error_reporting(0);
		if($_GET['search']){
			$search = $_GET['search'];
			$sql .= " where nama like '%{$search}%' 
					or alamat like '%{$search}%' ";
		}
		$result = mysql_query($sql);
		while ($data = mysql_fetch_array($result)){ ?>
		<tr>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jenkel']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><a href="detail.php?id_siswa=<?php echo $data['id_siswa']; ?>">Nilai</a></td>
			<td><a href="edit.php?id_siswa=<?php echo $data['id_siswa']; ?>">Edit</a></td>
			<td><a href="delete.php?id_siswa=<?php echo $data['id_siswa']; ?>"
				onclick="return confirm('Apa anda yakin?')">Hapus</a>
			</td>
		</tr>
		<?php }
	}
	public function create(){
		$nama = $_POST['nama'];
		$jenkel = $_POST['jenkel'];
		$alamat = $_POST['alamat'];
		mysql_query("insert into siswa (nama,jenkel,alamat) values ('$nama','$jenkel','$alamat')");
		header('Location: index.php');
	}
	public function edit(){
		$id_siswa = $_GET['id_siswa'];
		$sql = mysql_query("select * from siswa where id_siswa = $id_siswa");
		$data = mysql_fetch_array($sql); ?>
		<tr>
			<input type="text" name="id_siswa" value="<?php echo $data['id_siswa']; ?>" hidden="true">
			<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
			<td><input type="text" name="jenkel" value="<?php echo $data['jenkel']; ?>"></td>
			<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
			<td><input type="submit" value="Simpan"></td>
		</tr> <?php
	}
	public function update(){
		$id_siswa = $_POST['id_siswa'];
		$nama = $_POST['nama'];
		$jenkel = $_POST['jenkel'];
		$alamat = $_POST['alamat'];
		mysql_query("update siswa set nama = '$nama' , jenkel = '$jenkel' , alamat = '$alamat' where id_siswa = $id_siswa");
		header("Location: index.php");
	}
	public function delete(){
		$id_siswa = $_GET['id_siswa'];
		$sql1 = mysql_query("delete from siswa where id_siswa = $id_siswa");
		$sql2 = mysql_query("delete from nilai where id_siswa = $id_siswa");
		header("Location: index.php");
	}
}

class CrudNilai implements Crud{
	public function show(){
		$id_siswa = $_GET['id_siswa'];
		$sql = mysql_query("select siswa.id_siswa, matpel.id_matpel, matpel.pelajaran, nilai.nilai 
							from siswa, matpel, nilai where 
							siswa.id_siswa = $id_siswa and 
							siswa.id_siswa = nilai.id_siswa and 
							matpel.id_matpel = nilai.id_matpel");
		while ($data = mysql_fetch_array($sql)){ ?>
		<tr>
			<td><?php echo $data['pelajaran']; ?></td>
			<td><?php echo $data['nilai']; ?></td>
			<td><a href="detail_edit.php?id_siswa=<?php echo $data['id_siswa']; ?>&&
								id_matpel=<?php echo $data['id_matpel'] ?>">Edit</a></td>
			<td><a href="detail_delete.php?id_siswa=<?php echo $data['id_siswa']; ?>&&
								id_matpel=<?php echo $data['id_matpel'] ?>"
					onclick="return confirm('Apa anda yakin?')">Hapus</a>
			</td>
		</tr>
		<?php } 
	}
	public function create(){
		$id_siswa = $_POST['id_siswa'];
		$pelajaran = $_POST['pelajaran'];
		$nilai = $_POST['nilai'];
		mysql_query("insert into nilai (id_siswa, id_matpel, nilai) values ($id_siswa , $pelajaran ,'$nilai')");
		header("Location: detail.php?id_siswa=$id_siswa");
	}
	public function edit(){
		$id_siswa = $_GET['id_siswa'];
		$id_matpel = $_GET['id_matpel'];
		$sql = mysql_query("select siswa.id_siswa, siswa.nama, 
			matpel.id_matpel, matpel.pelajaran, 
			nilai.id_nilai, nilai.id_siswa, nilai.id_matpel, nilai.nilai 
			from siswa, matpel, nilai where 
			siswa.id_siswa = $id_siswa and 
			matpel.id_matpel = $id_matpel and 
			siswa.id_siswa = nilai.id_siswa and 
			matpel.id_matpel = nilai.id_matpel");
		$data = mysql_fetch_array($sql); ?>
		<tr>
			<input type="text" name="id_siswa" value="<?php echo $data['id_siswa']; ?>" hidden="true">
			<input type="text" name="id_matpel" value="<?php echo $data['id_matpel']; ?>" hidden="true">
			<td><input type="text" name="pelajaran" value="<?php echo $data['pelajaran']; ?>"></td>
			<td><input type="text" name="nilai" value="<?php echo $data['nilai']; ?>"></td>
			<td><input type="submit" value="Simpan"></td>
		</tr> <?php
	}
	public function update(){
		$id_siswa = $_POST['id_siswa'];
		$id_matpel = $_POST['id_matpel'];
		$nilai = $_POST['nilai'];
		mysql_query("update nilai set nilai = '$nilai' where id_siswa = $id_siswa and id_matpel = $id_matpel");
		header("Location: detail.php?id_siswa=$id_siswa");
	}
	public function delete(){
		$id_siswa = $_GET['id_siswa'];
		$id_matpel = $_GET['id_matpel'];
		mysql_query("delete from nilai where id_siswa = $id_siswa and id_matpel = $id_matpel");
		header("Location: detail.php?id_siswa=$id_siswa");
	}
}