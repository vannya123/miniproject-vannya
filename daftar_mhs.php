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
                        <form action="aksi_mhs.php" method="POST">
                            <h1><b>Pendaftaran</b></h1>
                            <hr width="50%" align="center">
                            <p>Isilah seluruh kolom registrasi dengan sebenar-benarnya.</p>
                            <table width="50%" cellpadding="10" border="0" bgcolor="#3CB371">
                                <tr>
                                    <td width="30%">Nama</td>
                                    <td width="10%">:</td>
                                    <td width="60%"><input name="nama" type="text" maxlength="50" placeholder="Masukkan Nama"></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input name="username" type="text" maxlength="50" placeholder="Masukkan Username"></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><input name="nim" type="text" maxlength="20" placeholder="Masukkan NIM"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input name="pwd" type="password" maxlength="20" placeholder="Password"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input name="email" type="text" maxlength="50" placeholder="Masukkan Email"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><input name="jeniskelamin" type="radio" value="laki-laki">Laki-laki<br>
                                    <input name="jeniskelamin" type="radio" value="perempuan">Perempuan</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><input name="tanggallahir" type="date" placeholder="dd/mm/yyyy"></td>
                                </tr>
                                <tr>
                                    <td>Negara</td>
                                    <td>:</td>
                                    <td><input type="text" name="negara" maxlength="50" placeholder="Negara Tempat Tinggal"></td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td>:</td>
                                    <td>
                                        <select name="kota">
                                            <option value="ambon">Ambon</option>
                                            <option value="balikpapan">Balikpapan</option>
                                            <option value="banda aceh">Banda Aceh</option>
                                            <option value="bandung">Bandung</option>
                                            <option value="banjar">Banjar</option>
                                            <option value="banjarmasin">Banjarmasin</option>
                                            <option value="batam">Batam</option>
                                            <option value="cirebon">Cirebon</option>
                                            <option value="pekanbaru">Pekanbaru</option>
                                            <option value="padang">Padang</option>
                                            <option value="yogyakarta">Yogyakarta</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Biografi</td>
                                    <td>:</td>
                                    <td><textarea rows="5" cols="40" name="biografi" placeholder="Isilah Biografi Singkat Anda"></textarea></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="simpan" value="Simpan"></td>
                                </tr>
                            </table>

                        </td>

                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>