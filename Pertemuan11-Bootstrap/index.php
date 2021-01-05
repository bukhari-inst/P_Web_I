<?php
include 'koneksi.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "home";
}

switch ($page) {
    case "home";
        include "header.php";
        include "navigasi.php";
        include "home.php";
        include "footer.php";
        break;

    case "inputtamu";
        include "header.php";
        include "navigasi.php";
        include "inputtamu.php";
        include "footer.php";
        break;
    case "datatamu";
        include "header.php";
        include "navigasi.php";
        include "datatamu.php";
        include "footer.php";
        break;
    case "simpan";
        include "header.php";
        include "navigasi.php";
        include "simpan-tamu.php";
        include "footer.php";
        break;
    case "datatamu";
        include "header.php";
        include "navigasi.php";
        include "datatamu.php";
        include "footer.php";
        break;
    case "hapus";
        include "header.php";
        include "navigasi.php";
        include "delete.php";
        include "footer.php";
        break;
    case "update";
        include "header.php";
        include "navigasi.php";
        include "update.php";
        include "footer.php";
        break;
    case "prosesupdate";
        include "header.php";
        include "navigasi.php";
        include "prosesupdate.php";
        include "footer.php";
        break;
}