<div class="tambah">
    <h1>Edit Data Event</h1>

    <form action="<?= base_url ('data_event/update') ?>" method="POST">

        <input type="hidden" value="<?= $edit['id'];?>" name="id">
        <label for="">Nama Lomba</label>
        <input type="text" name="nama_lomba" value="<?= $edit['nama_lomba'];?>" >
        <br><br>
        <label for="">Penyelenggara</label>
        <input type="text" name="penyelenggara" value="<?= $edit['penyelenggara'];?>" >
        <br><br>
        <input type="submit" value="SIMPAN">
    </form>