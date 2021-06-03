<html>
<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 250px;
            background-color: #90EE90;
        
        }
        li  {
            display: block;
            color: #555;
            padding: 8px 16px;
            border-bottom: 1px solid #555;
        }

        li:hover {
            background-color: #3CB371;
            color: white;
        }

        ul li:hover .sub1 {
            display: block;
            position: relative;
        }

        ul .sub1 {
            display: none;
            position: absolute;
            background-color: s;
        }
    </style>
</head>
<body bgcolor="#3CB371">
    <table border="0" width="100%" height="200%" bgcolor="#3CB371">
        <tr>
            <td bgcolor="#90EE90" align="center" style="font-size: 20px;">Home</td>
            <td height="5%" colspan="2" bgcolor="#3CB371" align="center">PORTAL ADMIN</td>
        </tr>
        <tr>
            <td width="20%" bgcolor="#90EE90" valign="top">
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li>Data Mahasiswa
                        <ul class="sub1">
                            <li><a href="daftar_mhs.php">Input Data mahasiswa</a></li>
                            <li><a href="tampil_mhs.php">Daftar mahasiswa</a></li>
                        </ul>
                    </li>
                    <li>Data Buku
                        <ul class="sub1">
                            <li><a href="daftar_buku.php">Input Data Buku</a></li>
                            <li><a href="tampil_buku.php">Daftar Buku</a></li>
                        </ul>
                    </li>
                    <li>Transaksi
                        <ul class="sub1">
                            <li><a href="peminjaman_bk.php">Peminjaman Buku</a></li>
                            <li><a href="pengembalian_bk.php">Pengembalian Buku</a></li>
                        </ul>
                    </li>
                    <li>Akun</li>
                </ul>
            </td>
            <td bgcolor="white" valign="top">
                <table border="0" width="100%" height="100%">
                    <tr>
                        <td  colspan="4" valign="top"> 
                        <h1 align="center">DATA PEMINJAMAN BUKU</h1>
                            <p><a href="peminjaman_bk.php">Tambah Peminjaman</a></p>
                            <table border="1" width="100%" bgcolor="#90EE90">
                                <tr align="center">
                                    <td>NO.Transaksi</td>
                                    <td>Tanggal Pinjam</td>
                                    <td>Tanggal Kembali</td>
                                    <td>NPM Mahasiswa</td>
                                    <td>Kode Buku</td>
                                    <td>Opsi</td>
                                    
                                </tr>
                                <?php
                                include 'koneksi.php';
                                $data = mysqli_query($konek, "select * from peminjaman_bk");
                                while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $d['no_transaksi']; ?></td>
                                    <td><?php echo $d['tgl_pinjam']; ?></td>
                                    <td><?php echo $d['tgl_kembali']; ?></td>
                                    <td><?php echo $d['npm_mhs']; ?></td>
                                    <td><?php echo $d['kd_buku']; ?></td>
                                

                                    <td>
                                        <a href="edit_transaksi.php?no_transaksi=<?php echo $d['no_transaksi']; ?>" >EDIT</a>
                                        <a href="hapus_pinjam.php?no_transaksi=<?php echo $d['no_transaksi']; ?>">HAPUS</a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            
                                
                            </table>
                            <h1 align="center">DATA PENGEMBALIAN BUKU</h1>
                            <table border="1" width="50%" bgcolor="#90EE90" align="center">
                                <tr align="center">
                                    <td width="25%">NO.Transaksi</td>
                                    <td width="25%">Denda</td>
                                    
                                </tr>
                                <?php
                                include 'koneksi.php';
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
                            
                                
                            </table>
                            <p><a href="cetak_pinjam.php">CETAK</a></p>
                            <p><a href="dashboard.php">KEMBALI</a></p>

                        </td>

                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>