    <div class="tambahc">
    <h1 class="h1t">Pendaftaran</h1>

        <form action="tambah/tambah" method="POST">
            <label for="">Jenis Lomba</label>
            <select name="nama_lomba">
            <?php foreach($jenis_lomba as $jns) : ?>
                <option value="<?= $jns['id']?>"><?= $jns['nama_lomba'] ?></option>
                <?php endforeach ; ?>
            </select> 
            <br><br>
            <label for="">Nama Pendaftar</label>
            <input type="text" name="nama_pendaftar" placeholder="Masukan Nama" required>
            <br><br>
            <label for="">Kelas</label>
            <input type="text"  name="kelas" placeholder="Masukan kelas" required>
            <br><br>
            <label for="">No HP</label>
            <input type="text"  name="no_hp" placeholder="Masukan no hp" required>
            <br><br>
            <label for="">Tanggal Daftar</label>
            <input type="date"  name="tgl_daftar" required>
            <br><br>
            <input type="submit" value="Simpan">
        </form>
        </div>
