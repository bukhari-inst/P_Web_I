<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "db_webbootstrap";
$konek = mysqli_connect($host, $user, $pass);
if ($konek) {
    mysqli_select_db($konek, "db_webbootstrap");
    // echo "koneksi berhasil ";
} else {
    echo "koneksi gagal";
}