<?php
include "koneksi.php";
$no = $_POST['no'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$gender = $_POST['gender'];
$keperluan = $_POST['keperluan'];
$tgl = date('Y-m-d');

$query = mysqli_query($konek, "UPDATE  t_tamu SET email='$email', nama='$nama', nim='$nim', gender='$gender', keperluan='$keperluan' WHERE no='$no' ") or die(mysqli_error($konek));

if ($query) {
    echo "<SCRIPT LANGUAGE = 'JavaScript'>alert('Data Berhasil Diupdate')</SCRIPT>";
    echo "<meta http-equiv='refresh' content='0; ?page=datatamu'>";
} else {
    echo "Data Gagal Diupdate";
}