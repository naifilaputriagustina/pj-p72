<style> 
.login
{
    background-color: rgb(89, 180, 184);
    background-color: aliceblue;
    width: 350px;
    padding: 20px;
    margin: auto;
    margin-top: 100px;
    border: 2px solid black;
    font-size: 18px;
}
 
h1
{
    
    text-align: center;
    
    padding: 10px;
    border-radius: 7px;
}
 
input
{
    width: 100%;
    padding: 12px 10px;
    box-sizing: border-box;
    font-size: 18px;
}
 
input[type=submit]
{
    background-color: violet;
    border-radius:18px;
    color: white;
}
</style>



<div class="login">
<h2>selamat datang!</h2>
            
            <?= $this->session->flashdata('massage'); ?>

            <form action="<?= base_url ()?>login/validasi" method="POST">
                <label for="">Username :</label>
                <input type="text" name="username" placeholder="Masukkan Username" required>
                <br><br>
                <label for="">Password :</label>
                <input type="password" name="password" placeholder="Masukkan Password" required>
                <br><br>
                
                <input type="submit" value="Login">
                <br>
                <br>

                <p>Belum punya akun? <a href="<?= base_url ('daftar')?>">Daftar</a></p>

            </form>
        </div>