<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($konek, "SELECT * FROM t_tamu WHERE no = '$id'");
$data = mysqli_fetch_array($query);
?>

<main role="main" class="container">
    <form method="post" action="?page=prosesupdate">
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" name="email" required id="exampleFormControlInput1"
                placeholder="name@example.com" value=<?php echo $data['email']; ?>>
            <input type="hidden" name="no" value=<?php echo $data['no']; ?>>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="BUQORI" name="nama"
                required value=<?php echo $data['nama']; ?>>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">NIM</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="1855201033" name="nim"
                required value=<?php echo $data['nim']; ?>>
        </div>
        <label for="gender">Jenis Kelamin:</label><br />
        <input type="radio" id="male" name="gender" value="L" required />
        <label for="male">Laki-Laki</label><br />
        <input type="radio" id="female" name="gender" value="P" required />
        <label for="female">Perempuan</label><br />
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Keperluan</label>
            <textarea class="form-control" name="keperluan" required id="exampleFormControlTextarea1"
                rows="3"><?php echo $data['Keperluan']; ?></textarea>
        </div>
        <p><button type="submit" class="btn btn-dark">Update</button></p>
    </form>
</main>