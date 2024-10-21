<style>
   .profil
{
    
    background-color: #EEE9E9;
    width: 350px;
    padding: 20px;
    margin: auto;
    margin-top: 100px;
    border: 2px solid black;
    font-size: 18px;

}
</style>


<div class="profil">
<h2>Profil</h2>
<p>Nama: <?= $user['nama']?></p>
<p>Username: <?= $user['username']?></p>
<a href="<?= base_url() ?>profil/editProfil">Edit Profil</a>