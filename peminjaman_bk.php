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
                        <td  colspan="4" valign="top" align="center" > 
                        <form action="aksi_transaksi.php" method="POST">
                            <h1><b>Peminjaman Buku</b></h1>
                            <hr width="50%" align="center">
                            <p>Isilah seluruh kolom registrasi dengan sebenar-benarnya.</p>
                            <table width="50%" cellpadding="10" border="0" bgcolor="#3CB371">
                                <tr>
                                    <td width="30%">No. Transaksi</td>
                                    <td width="10%">:</td>
                                    <td width="60%"><input name="no_transaksi" type="int"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Peminjaman</td>
                                    <td>:</td>
                                    <td><input name="tgl_pinjam" type="date" placeholder="Tanggal Peminjaman"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Kembali</td>
                                    <td>:</td>
                                    <td><input name="tgl_kembali" type="date" placeholder="Tanggal Pengembalian"></td>
                                </tr>
                                <tr>
                                    <td>NPM Mahasiswa</td>
                                    <td>:</td>
                                    <td><input name="npm_mhs" type="text" maxlength="10" placeholder="Masukkan NPM"></td>
                                </tr>
                                <tr>
                                    <td>Kode Buku</td>
                                    <td>:</td>
                                    <td><input name="kd_buku" type="text" maxlength="25" placeholder="Masukkan Kode"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="simpan" value="Simpan"></td>
                                </tr>
                            </table>
                            <p align="left"><a href="tampil_pinjam.php">Transaksi</a></p>
                        </td>
                    
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>