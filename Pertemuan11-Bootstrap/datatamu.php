<?php
include "koneksi.php";
$result = mysqli_query($konek, "SELECT * FROM t_tamu ORDER BY no DESC");
?>
<main role="main" class="container">
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