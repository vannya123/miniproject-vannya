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
                        <h1 align="center"><B>EDIT DATA BUKU</B></h1>
                        <hr width="50%" align="center">
                        <p align="center">Tempat Untuk Mengedit Data!</p>
                        <?php
                        include 'koneksi.php';
                        $kode_buku = $_GET['kode_buku'];
                        $data = mysqli_query($konek, "select * from buku where kode_buku='$kode_buku'");
                        while($d = mysqli_fetch_array($data)){
                            ?>
                            <form method="post" action="update_buku.php">
                            <table align="center" bgcolor="#3CB371">
                                <tr>
                                    <td>Kode Buku</td>
                                    <td>
                                        <input type="text" name="kode_buku" value="<?php echo $d['kode_buku']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judul</td>
                                    <td>
                                        <input type="text" name="judul" value="<?php echo $d['judul']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pengarang</td>
                                    <td>
                                        <input type="text" name="pengarang" value="<?php echo $d['pengarang']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td>
                                        <input type="text" name="penerbit" value="<?php echo $d['penerbit']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tahun Terbit</td>
                                    <td>
                                        <input type="number" name="tahun_terbit" value="<?php echo $d['tahun_terbit']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="simpan" value="Simpan"></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                            </form>
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>