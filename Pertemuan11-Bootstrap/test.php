<main role="main" class="container">
    <form method="post" action="?page=simpan">
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" name="email" required id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bukhari" name="nama"
                required>
        </div>
        <label for="gender">Jenis Kelamin:</label><br />
        <input type="radio" id="male" name="gender" value="L" checked />
        <label for="male">Laki-Laki</label><br />
        <input type="radio" id="female" name="gender" value="P" />
        <label for="female">Perempuan</label><br />
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Keperluan</label>
            <textarea class="form-control" name="keperluan" required id="exampleFormControlTextarea1"
                rows="3"></textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
</main>

include 'koneksi.php';
$email = $_POST['email'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$keperluan = $_POST['keperluan'];
$tgl = date('y-m-d');

// echo "$email<br>";
// echo "$nama<br>";
// echo "$gender<br>";
// echo "$keperluan<br>";
// echo "$tgl<br>";

$query = mysqli_query($konek, "INSERT INTO t_tamu (no,email, nama, gender, keperluan, tgl)
VALUES('','$email',$nama,'$gender','$keperluan','$tgl')") or die(mysqli_error($konek));

$query = mysqli_query($konek, "INSERT INTO t_tamu (no, email, nama, nim, gender, keperluan, tgl)
VALUES ('','$email', '$nama', '$nim', '$gender', '$keperluan', '$tgl')") or die(mysql_error());

if ($query) {
echo "Berhasil";
} else {
echo "Gagal";
}