<html>
<head></head>
<body bgcolor="#90EE90">
    <h1 align="center">DATA MAHASISWA</h1>
    <p><a href="daftar_mhs.php">Tambah Mahasiswa</a></p>
    <table border="1" width="100%">
        <tr align="center">
            <td>NO</td>
            <td>Nama</td>
            <td>Username</td>
            <td>NIM</td>
            <td>Password</td>
            <td>Email</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
            <td>Negara</td>
            <td>Kota</td>
            <td>Biografi</td>
            <td>Opsi</td>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($konek, "select * from daftar");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['username']; ?></td>
            <td><?php echo $d['nim']; ?></td>
            <td><?php echo $d['pwd']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['jeniskelamin']; ?></td>
            <td><?php echo $d['tanggallahir']; ?></td>
            <td><?php echo $d['negara']; ?></td>
            <td><?php echo $d['kota']; ?></td>
            <td><?php echo $d['biografi']; ?></td>
        

            <td>
                <a href="edit_data.php?nim=<?php echo $d['nim']; ?>" >EDIT</a>
                <a href="hapus_data.php?nim=<?php echo $d['nim']; ?>">HAPUS</a>
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