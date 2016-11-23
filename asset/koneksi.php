<?php
try{
	$con = mysql_connect('139.59.226.31','cendana','cendananr2425');
	// $con = mysql_connect('localhost','root','');
	mysql_select_db('cendana_mustofa_sekolah');
}
catch(Exception $e){
	echo $e->getMessage();
}

include_once "lib/crud.php";
$crud_siswa = new CrudSiswa();
$crud_nilai = new CrudNilai();