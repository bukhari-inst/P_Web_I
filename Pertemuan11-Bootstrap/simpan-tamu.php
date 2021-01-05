<?php
include "koneksi.php";
$email = $_POST['email'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$gender = $_POST['gender'];
$keperluan = $_POST['keperluan'];
$tgl = date('Y-m-d');

$query = mysqli_query($konek, "INSERT INTO t_tamu (no, email, nama, nim, gender, keperluan, tgl)
         VALUES ('','$email', '$nama', '$nim', '$gender', '$keperluan', '$tgl')") or die(mysqli_error($konek));

if ($query) {
    echo "<SCRIPT LANGUAGE = 'JavaScript'>alert('Data Berhasil Disimpan')</SCRIPT>";
    echo "<meta http-equiv='refresh' content='0; ?page=datatamu'>";
} else {
    echo "data gagal tersimpan";
}