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
    border: 1px solid #8b8989;
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
    background-color: #8b8989;
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
<a class="button" href="<?= base_url(); ?>tambah2">Tambah Data</a>
<br><br>
<table border="1">
        <tr>
            <th>No</th>
            <th>Nama Event</th>
            <th>Penyelenggara</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($jenis_lomba as $lmb) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $lmb['nama_lomba']?></td>
                <td><?= $lmb['penyelenggara']?></td>
                <td><a class="a-edit" href="<?= base_url(); ?>data_event/edit/<?= $lmb['id'] ?>">edit</a></td>
                <td><a class="a-hapus" onclick="return confirm('Yakin Hapus?')" href="<?= base_url(); ?>data_event/hapus/<?= $lmb['id'] ?>">hapus</a></td>
                
            </tr>
            <?php $i++; ?>
        <?php endforeach;?>
    </table>

    