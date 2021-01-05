<?php
include "header.php";
include "navigasi.php";
include "koneksi.php";
include "footer.php";

$JumlahDataPerHalaman = 4;
$limit = mysqli_query($konek, "SELECT * FROM t_tamu ORDER BY no DESC");
$JumlahData = mysqli_num_rows($limit);
$JumlahHalaman = ceil($JumlahData / $JumlahDataPerHalaman);
$HalamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$AwalData = ($JumlahDataPerHalaman * $HalamanAktif) - $JumlahDataPerHalaman;

$result = mysqli_query($konek, "SELECT * FROM t_tamu ORDER BY no DESC LIMIT $AwalData,$JumlahDataPerHalaman");

?>
<main role="main" class="container">
    <div class="pagenation">
        <?php if ($HalamanAktif > 1) : ?>
        <a href="datatamu.php?halaman=<?= $HalamanAktif - 1; ?>">&laquo;</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $JumlahHalaman; $i++) : ?>
        <?php if ($i == $HalamanAktif) : ?>
        <a href="datatamu.php?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
        <a href="datatamu.php?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
        <?php endfor; ?>

        <?php if ($HalamanAktif < $JumlahHalaman) : ?>
        <a href="datatamu.php?halaman=<?= $HalamanAktif + 1; ?>">&raquo;</a>
        <?php endif; ?>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Email</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Gender</th>
                <th scope="col">Keperluan</th>
                <th scope="col" colspan="2">Hapus</th>
            </tr>
        </thead>
        <?php
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <tbody>
            <tr>
                <td scope="row"><?php echo $i; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['Keperluan']; ?></td>
                <td>
                    <a href="?page=hapus&id=<?php echo $row['no']; ?>">Hapus
                        <a href="?page=update&id=<?php echo $row['no']; ?>">Update
                </td>
            </tr>
            <?php
            $i++;
        }
            ?>
        </tbody>
    </table>
</main>