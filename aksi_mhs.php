<?php
$user_name  = "root";
$password   = "";
$database   = "mahasiswa";
$host_name  = "localhost";

$konek=mysqli_connect("localhost","root","","mahasiswa");
if (!$konek) {
    die("Connection Failed" . mysqli_connect_error());
}

      
$nama = @$_POST['nama'];
$username = @$_POST['username'];
$pwd = @$_POST['pwd'];
$email = @$_POST['email'];
$jeniskelamin = @$_POST['jeniskelamin'];
$tanggallahir = @$_POST['tanggallahir'];
$negara =@$_POST['negara'];
$kota = @$_POST['kota'];
$biografi = @$_POST['biografi'];
$nim = @$_POST['nim'];


$sql = "INSERT INTO daftar (nama,username,nim,pwd,email,jeniskelamin,tanggallahir,negara,kota,biografi) VALUES ('$nama', '$username','$nim',
 '$pwd','$email', '$jeniskelamin', '$tanggallahir', '$negara', '$kota', '$biografi')";


if (mysqli_query($konek, $sql)) {
      echo "Data Baru successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($konek);
}
mysqli_close($konek);

header("location:dashboard.php");

?>
