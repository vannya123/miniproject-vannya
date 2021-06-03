<?php
$user_name  = "root";
$password   = "";
$database   = "mahasiswa";
$host_name  = "localhost";

$konek=mysqli_connect("localhost","root","","mahasiswa");
if (!$konek) {
    die("Connection Failed" . mysqli_connect_error());
}

$kode_buku = @$_POST['kode_buku'];
$judul = @$_POST['judul'];
$pengarang =@$_POST['pengarang'];
$penerbit =@$_POST['penerbit'];
$tahun_terbit =@$_POST['tahun_terbit'];

$sql = "INSERT INTO buku (kode_buku,judul,pengarang,penerbit,tahun_terbit) VALUES ('$kode_buku', '$judul', '$pengarang', '$penerbit', 
'$tahun_terbit')";

if (mysqli_query($konek, $sql)) {
      echo "Data Baru successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($konek);
}
mysqli_close($konek);
header("location:tampil_buku.php");
?>
