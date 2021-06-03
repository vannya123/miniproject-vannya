<?php

include 'koneksi.php';

$no_transaksi =$_GET['no_transaksi'];

mysqli_query($konek, "delete from peminjaman_bk where no_transaksi='$no_transaksi'");

header("location:tampil_pinjam.php");
?>