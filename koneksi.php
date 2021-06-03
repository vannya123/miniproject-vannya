<?php
$konek=mysqli_connect("localhost","root","","mahasiswa");
if (!$konek){
    echo("Connection Failed") . mysqli_connect_error();
}
?>