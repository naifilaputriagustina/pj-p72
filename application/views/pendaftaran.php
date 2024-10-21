<style>
   
   table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  text-align: center;
}
.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
table th{
    background-color: #1E90FF;
}
.button {
             background-color: #808080;
             color: white;
             padding: 14px 20px;
             margin: 8px 0;
             border: none;
             cursor: pointer;
  
    }
</style>
<br><br>
<a class="button" href="<?php echo base_url(); ?>tambah">Tambah Data</a>
<br><br>
<table border="1">
        <tr>
            <th>No</th>
            <th>Nama Event</th>
            <th>Nama Pendaftar</th>
            <th>Kelas</th>
            <th>No Telp.</th>
            <th>Tanggal Daftar</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($pendaftaran as $dftr) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $dftr['id_lomba']?></td>
                <td><?= $dftr['nama_pendaftar']?></td>
                <td><?= $dftr['kelas']?></td>
                <td><?= $dftr['no_hp']?></td>
                <td><?= $dftr['tgl_daftar']?></td>
                <td><a class="a-edit" href="<?= base_url(); ?>pendaftaran/edit/<?= $dftr['id'] ?>">edit</a></td>
                <td><a class="a-hapus" onclick="return confirm('Yakin Hapus?')" href="<?= base_url(); ?>pendaftaran/hapus/<?= $dftr['id'] ?>">hapus</a></td>
                
            </tr>
            <?php $i++; ?>
        <?php endforeach;?>
    </table>

   