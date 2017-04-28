<?php
// memanggil class mahasiswa
require_once "function/libmhs.php";
// instance objek mhs
$mhs = new mhs();

$nim           = mysql_real_escape_string(trim($_POST['nim']));
$nama          = mysql_real_escape_string(trim($_POST['nama']));
$tempat_lahir  = mysql_real_escape_string(trim($_POST['tempat_lahir']));

$tanggal       = $_POST['tanggal_lahir'];
$tgl           = explode('-',$tanggal);
$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

$jenis_kelamin = $_POST['jenis_kelamin'];
$agama         = $_POST['agama'];
$alamat        = mysql_real_escape_string(trim($_POST['alamat']));
$no_telepon    = $_POST['no_telepon'];

$mhs->update(	$nama,
				$tempat_lahir,
				$tanggal_lahir,
				$jenis_kelamin,
				$agama,
				$alamat,	
				$no_telepon,
				$nim);							
?>