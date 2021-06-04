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
$denda = @$_POST['denda'];



$sql = "INSERT INTO pengembalian_bk (no_transaksi,denda) VALUES ('$no_transaksi', '$denda')";


if (mysqli_query($konek, $sql)) {
      echo "Data Baru successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($konek);
}
mysqli_close($konek);

header("location:dashboard.php");

?>
