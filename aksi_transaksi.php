<?php
$user_name  = "root";
$password   = "";
$database   = "mahasiswa";
$host_name  = "localhost";

$konek=mysqli_connect("localhost","root","","mahasiswa");
if (!$konek) {
    die("Connection Failed" . mysqli_connect_error());
}

      
$no_transaksi = @$_POST['no_transaksi'];
$tgl_pinjam = @$_POST['tgl_pinjam'];
$tgl_kembali = @$_POST['tgl_kembali'];
$npm_mhs = @$_POST['npm_mhs'];
$kd_buku = @$_POST['kd_buku'];



$sql = "INSERT INTO peminjaman_bk (no_transaksi,tgl_pinjam,tgl_kembali,npm_mhs,kd_buku) VALUES ('$no_transaksi', '$tgl_pinjam','$tgl_kembali',
 '$npm_mhs', '$kd_buku')";


if (mysqli_query($konek, $sql)) {
      echo "Data Baru successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($konek);
}
mysqli_close($konek);

header("location:tampil_pinjam.php");

?>
