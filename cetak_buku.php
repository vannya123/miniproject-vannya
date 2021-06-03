<html>
<head></head>
<body bgcolor="#90EE90">
    <h1 align="center"><b>DAFTAR BUKU</b></h1>
    <p><a href="daftar_buku.php">TAMBAH DATA BUKU</a></p>
    <table border="1" width="70%">
        <tr align="center">
            <td>NO</td>
            <td>Kode Buku</td>
            <td>Judul</td>
            <td>Pengarang</td>
            <td>Penerbit</td>
            <td>Tahun Terbit</td>
            <td>Opsi</td>
        </tr>
        <?php
        include 'koneksibuku.php';
        $no =1;
        $data = mysqli_query($konek, "select * from daftarbuku");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul'];?></td>
                <td><?php echo $d['pengarang']; ?></td>
                <td><?php echo $d['penerbit']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td>
                    <a href="edit_buku.php?kode_buku=<?php echo $d['kode_buku']; ?>" >EDIT</a>
                    <a href="hapus_buku.php?kode_buku=<?php echo $d['kode_buku']; ?>" >HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>


        <script>
            window.print();
        </script>

</body>
</html>