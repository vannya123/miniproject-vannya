<html>
<head></head>
<body>
    <?php
    include 'koneksi.php';


    $kode_buku = @$_POST['kode_buku'];
    $judul = @$_POST['judul'];
    $pengarang =@$_POST['pengarang'];
    $penerbit =@$_POST['penerbit'];
    $tahun_terbit =@$_POST['tahun_terbit'];

    mysqli_query($konek,"update buku set kode_buku='$kode_buku', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', 
    tahun_terbit='$tahun_terbit' where kode_buku='$kode_buku'");

    header("location:tampil_buku.php");
    ?>

    
</body>
</html>