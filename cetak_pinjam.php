<html>
<head></head>
<body bgcolor="#90EE90">
    <h1 align="center">DATA PEMINJAMAN BUKU</h1>
    <p><a href="peminjaman_bk.php">Tambah Peminjaman</a></p>
    <table border="1" width="100%">
        <tr align="center">
            <td>NO.Transaksi</td>
            <td>Tanggal Pinjam</td>
            <td>Tanggal Kembali</td>
            <td>NPM Mahasiswa</td>
            <td>Kode Buku</td>

        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($konek, "select * from peminjaman_bk");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
        <td><?php echo $d['no_transaksi']; ?></td>
        <td><?php echo $d['tgl_pinjam']; ?></td>
        <td><?php echo $d['tgl_kembali']; ?></td>
        <td><?php echo $d['npm_mhs']; ?></td>
        <td><?php echo $d['kd_buku']; ?></td>
        
        </tr>
        <?php
        }
        ?>
    </table>

            <h1 align="center">DATA PENGEMBALIAN BUKU</h1>
                <table border="1" width="50%" align="center">
                    <tr align="center">
                        <td width="25%">NO.Transaksi</td>
                        <td width="25%">Denda</td>

                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($konek, "select * from pengembalian_bk");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                    <td><?php echo $d['no_transaksi']; ?></td>
                    <td><?php echo $d['denda']; ?></td>

                    
                    </tr>
                    <?php
                    }
                    ?>
        

        <script>
            window.print();
        </script>
</body>
</html>