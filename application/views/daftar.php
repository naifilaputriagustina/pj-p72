<style>
  
    
    .dftr
{
    
    background-color: aliceblue;
    width: 350px;
    padding: 20px;
    margin: auto;
    margin-top: 100px;
    border: 2px solid black;
    font-size: 18px;

}
h1{
        text-align: center;
        
    border-radius: 7px;
}
.dftr [type=text]{
    width: 95%;
    color: rgb(36, 35, 35);
    padding: 6px 7px;
    border-radius: 10px;
    
    border: none;
    
    
    cursor: pointer;
}
.dftr [type=password] {
    width: 95%;
    color: rgb(36, 35, 35);
    padding: 6px 7px;
    border-radius: 10px;
    
    border: none;
    
    cursor: pointer;
}
.dftr [type=submit]{
    width: 30%;
    color: white;
    padding: 6px 7px;
    border-radius: 10px;
    
    border: none;
    background-color:  violet;
    cursor: pointer;
}


</style>
<div class="dftr">
<h1 class="h1d">Daftar</h1>
   
        <form action="daftar/tambah" method="POST">
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Masukan Nama" required>
            <br><br>
            <label for="">Username</label>
            <input type="text"  name="username" placeholder="Masukan User" required>
            <br><br>
            <label for="">Password</label>
            <input type="password"  name="password" placeholder="Masukan Password" required>
            <br><br>
            <input type="submit" value="Simpan">
        </form>
        </div>