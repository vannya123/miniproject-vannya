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
                        <h1 align="center"><b>OPSI EDIT DATA</b></h1>
                        <hr width="50%" align="center">
                        <p align="center">Tempat Untuk Mengedit Data!</p>
                            <?php
                            include 'koneksi.php';
                            $nim = $_GET['nim'];
                            $data = mysqli_query($konek, "select * from daftar where nim='$nim'");
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <form method="post" action="update_data.php">
                                <table align="center" bgcolor="#3CB371">
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>
                                            <input type="text" name="username" value="<?php echo $d['username']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NIM</td>
                                        <td>
                                            <input type="texts" name="nim" value="<?php echo $d['nim']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>
                                            <input type="password" name="pwd" value="<?php echo $d['pwd']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            <input type="text" name="email" value="<?php echo $d['email']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <input name="jeniskelamin" type="radio" value="laki-laki" <?php if($d['jeniskelamin']== "laki-laki")
                                            echo 'checked'?> >Laki-laki<br>
                                            <input name="jeniskelamin" type="radio" value="perempuan" <?php if($d['jeniskelamin'] == "perempuan")
                                            echo 'checked'?> >Perempuan
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>
                                            <input type="date" name="tanggallahir" value="<?php echo $d['tanggallahir']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Negara</td>
                                        <td>
                                            <input type="text" name="negara" value="<?php echo $d['negara']; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kota</td>
                                        <td>
                                            <select name="kota">
                                            <option value="ambon" <?php if($d['kota']== "ambon")
                                            echo 'selected'?>>Ambon</option>
                                            <option value="balikpapan" <?php if($d['kota']== "balikpapan")
                                            echo 'selected'?>>Balikpapan</option>
                                            <option value="banda aceh" <?php if($d['kota']== "banda aceh")
                                            echo 'selected'?>>Banda Aceh</option>
                                            <option value="bandung" <?php if($d['kota']== "bandung")
                                            echo 'selected'?>>Bandung</option>
                                            <option value="banjar" <?php if($d['kota']== "banjar")
                                            echo 'selected'?>>Banjar</option>
                                            <option value="banjarmasin" <?php if($d['kota']== "banjarmasin")
                                            echo 'selected'?>>Banjarmasin</option>
                                            <option value="batam" <?php if($d['kota']== "batam")
                                            echo 'selected'?>>Batam</option>
                                            <option value="cirebon" <?php if($d['kota']== "cirebon")
                                            echo 'selected'?>>Cirebon</option>
                                            <option value="pekanbaru" <?php if($d['kota']== "pekanbaru")
                                            echo 'selected'?>>Pekanbaru</option>
                                            <option value="padang" <?php if($d['kota']== "padang")
                                            echo 'selected'?>>Padang</option>
                                            <option value="yogyakarta" <?php if($d['kota']== "yogyakarta")
                                            echo 'selected'?>>Yogyakarta</option>
                                    </select>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Biografi</td>
                                        <td>
                                            <textarea rows="5" cols="40" name="biografi" placeholder="Isilah Biografi Singkat Anda"><?=$d['biografi']?></textarea>
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