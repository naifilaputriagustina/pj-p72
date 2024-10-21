<div class="container-tambah">
    <h1>Edit Pendaftaran</h1>

    <form action="<?= base_url ('pendaftaran/update') ?>" method="POST">

        <input type="hidden" value="<?= $edit['id'];?>" name="id">

        <label for="">Nama Pendaftar</label>
        
        <label for="">Jenis Lomba</label>
            <select name="nama_lomba">
            <?php foreach($jenis_lomba as $jns) : ?>
                <option value="<?= $jns['id']?>"><?= $jns['nama_lomba'] ?></option>
                <?php endforeach ; ?>
            </select> 
            <br><br>
            <input type="text" name="nama_pendaftar" value="<?= $jns['nama_pendaftar'];?>" >
        <br><br>
        <label for="">Kelas</label>
        <input type="text" name="kelas" value="<?= $jns['kelas'];?>" >
        <br><br>
        <label for="">No HP</label>
        <input type="text" name="no_hp" value="<?= $jns['no_hp'];?>" >
        <br><br>
        <label for="">Tanggal Daftar</label>
        <input type="date" name="tgl_daftar" value="<?= $jns['tgl_daftar'];?>" >
        <br><br>
        <input type="submit" value="SIMPAN">
    </form>


</div>