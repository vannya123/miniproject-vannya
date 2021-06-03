<html>
<head></head>
<body>
    <?php
    include 'koneksi.php';


    $nama = @$_POST['nama'];
    $username = @$_POST['username'];
    $nim = @$_POST['nim'];
    $pwd = @$_POST['pwd'];
    $email = @$_POST['email'];
    $jeniskelamin = @$_POST['jeniskelamin'];
    $tanggallahir = @$_POST['tanggallahir'];
    $negara =@$_POST['negara'];
    $kota = @$_POST['kota'];
    $biografi = @$_POST['biografi'];

    mysqli_query($konek,"update daftar set nama='$nama', username='$username', nim='$nim', pwd='$pwd', email='$email',
    jeniskelamin='$jeniskelamin', tanggallahir='$tanggallahir', negara='$negara', kota='$kota', biografi='$biografi'
    where nim='$nim'");

    header("location:tampil_mhs.php");
    ?>

    
</body>
</html>