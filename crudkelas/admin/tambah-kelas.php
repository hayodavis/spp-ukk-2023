<h5>Halaman Tambah Data Kelas.</h5>
<a href="?url=kelas" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-tambah-kelas">
    <div class="form-group mb-2">
        <label for="nama_kelas">Nama Kelas</label>
        <input type="text" name="nama_kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
        <input type="text" name="kompetensi_keahlian" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
</form>
