<?php
// memanggil class mahasiswa
require_once "function/libmhs.php";
// instance objek mhs
$mhs = new mhs();

$nim = $_GET['id'];

$mhs->delete($nim);						
?>