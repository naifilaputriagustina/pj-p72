<h2>Edit Profil</h2>
<form action="<?= base_url() ?>profil/updateProfil" method="post">
    <input type="hidden" name="id" value="<?=$user['id']?>"><br><br>
    <input type="text" name="nama" value="<?=$user['nama']?>"><br><br>
    <input type="text" name="username" value="<?=$user['username']?>"><br><br>
    <input type="password" name="password" value="<?=$user['password']?>"><br><br>
    <input type="submit" value="Edit Profil">
</form>