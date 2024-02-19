<?php
   $koneksi = mysqli_connect("localhost","root","","gallery");
  if(isset($_GET["submit"])){
        $nama = $_GET["fnama"];
        $deskripsi = $_GET["fdeskripsi"];
        $tanggal = $_GET["ftanggal"];
        $userid = $_GET["fuserid"];
        $query="INSERT INTO album VALUES('','$nama','$deskripsi','$tanggal','$userid')";
        mysqli_query($koneksi,$query);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>tambah data</title>
</head>
<body>
    <form action="tambah.php" method="get">
        <table>
            <tr>
                <td>NAMA ALBUM</td>
                <td>:</td>
                <td><input type="text" name="fnama" id=""></td>
            </tr>
            <tr>
                <td>DESKRIPSI</td>
                <td>:</td>
                <td><input type="text" name="fdeskripsi" id=""></td>
            </tr>
            <tr>
                <td>TANGGAL DIBUAT</td>
                <td>:</td>
                <td><input type="date" name="ftanggal" id=""></td>
            </tr>
            <tr>
                <td>USERID</td>
                <td>:</td>
                <td><input type="text" name="fuserid" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">tambah data</button> | <button><a href="index.php">BACK TO INDEX</a></button></td>
            </tr>
        </table>
        </form>
</body>
</html>