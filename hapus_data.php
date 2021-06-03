<?php

include 'koneksi.php';

$nim =$_GET['nim'];

mysqli_query($konek, "delete from daftar where nim='$nim'");

header("location:tampil_mhs.php");
?>