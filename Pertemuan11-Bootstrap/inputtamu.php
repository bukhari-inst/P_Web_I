<main role="main" class="container">
    <form method="post" action="?page=simpan">
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" name="email" required id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="BUQORI" name="nama"
                required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">NIM</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="1855201033" name="nim"
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
        <p><button type="submit" class="btn btn-dark">Simpan</button></p>
    </form>
</main>