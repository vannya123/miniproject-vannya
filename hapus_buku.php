<?php

include 'koneksi.php';

$kode_buku =$_GET['kode_buku'];

mysqli_query($konek, "delete from buku where kode_buku='$kode_buku'");

header("location:tampil_buku.php");
?>          