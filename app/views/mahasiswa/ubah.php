<div class="container">
    <h3>Ubah Data Mahasiswa</h3>
    <form action="<?= BASEURL; ?>/mahasiswa/update/" method="post">
        <input type="hidden" name="id" value="<?= $data['mhs']['id']?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['mhs']['nama']; ?>"required>
    </div>
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="number" class="form-control" id="nim" name="nim" value="<?= $data['mhs']['nim']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $data['mhs']['email']; ?>" required>
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <select class="form-control" id="jurusan" name="jurusan">
            <option value="trpl">TRPL</option>
            <option value="tkj">TKJ</option>
            <option value="mm">MM</option>
        </select>
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
    <br><br>
    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Back</a>
</div>