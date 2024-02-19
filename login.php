<?php
   $koneksi = mysqli_connect("localhost","root","","gallery");
  if(isset($_GET["submit"])){
        $nama = $_GET["fnama"];
        $deskripsi = $_GET["fdeskripsi"];
        $tanggal = $_GET["ftanggal"];
        $userid = $_GET["fuserid"];
        $query="INSERT INTO user VALUES('','$nama','$deskripsi','$tanggal','$userid')";
        mysqli_query($koneksi,$query);
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="wrap-card">
        <h1>Log In</h1>
        <?php  if(isset($error)){ ?>
               <p style="color: red;">username atau password salah</p> 
        <?php } ?>
        <form action="login.php" method="post">
            <div class="card-name">
                <label for="email">usernama</label>
                <input type="text" name="fusername" id="">
            </div>
            <div class="card-name">
                <label for="password">password</label>
                <input type="password" name="fpassword" id="password">
            </div>
            <div class="card-name">
                <label for="email">Email</label>
                <input type="text" name="femail" id="email">
            </div>
            <div class="card-name">
                <label for="namalengkap">NamaLengkap</label>
                <input type="text" name="fnamalengkap" id="">
            </div>
            <div class="card-name">
                <label for="alamat">alamat</label>
                <input type="text" name="falamat" id="">
            </div>
            <div class="card-name">
                <button type="submit" name="submit">Log In</button>
            </div>
        </form>
        <span>buat akun <a href="registrasi.php">di sini</a> | <a href="index.php">back di sini</a></span>
    </div>
</body>
</html>