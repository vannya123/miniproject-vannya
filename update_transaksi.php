<html>
<head></head>
<body>
    <?php
    include 'koneksi.php';


    $no_transaksi = @$_POST['no_transaksi'];
    $tgl_pinjam = @$_POST['tgl_pinjam'];
    $tgl_kembali = @$_POST['tgl_kembali'];
    $npm_mhs = @$_POST['npm_mhs'];
    $kd_buku = @$_POST['kd_buku'];

    mysqli_query($konek,"update peminjaman_bk set no_transaksi='$no_transaksi', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali',
    npm_mhs='$npm_mhs', kd_buku='$kd_buku'
    where no_transaksi='$no_transaksi'");

    header("location:tampil_pinjam.php");
    ?>

    
</body>
</html>