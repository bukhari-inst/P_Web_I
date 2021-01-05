<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($konek, "DELETE FROM t_tamu WHERE no = '$id'");
if ($query) {
    header("Location:index.php?page=datatamu");
} else {
    echo " proses hapus data gagal";
}