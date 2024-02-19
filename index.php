<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
        require"function.php";
        $hasil= query("SELECT * FROM album");

    ?>
    <article>
        <div class="judul">
            <h1>Web Gallery Photo</h1>
            <table border=1>
    <thead>
        <tr>
            <th>ALBUM ID</th>
            <th>NAMA ALBUM</th>
            <th>DESKRIPSI</th>
            <th>TANGGAL DIBUAT</th>
            <th>USER ID</th>
            <th>ACTION</th>
            <th><a href="tambah.php">TAMBAH</a></th>
        </tr>
        </thead>
        <tbody>
        <?php 
        $i=1;
        foreach($hasil as $key){ ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="img/<?= $key["namaalbum"] ?>" width=150px></td>
            <td><?= $key["deskripsi"] ?></td>
            <td><?= $key["tanggaldibuat"] ?></td>
            <td><?= $key["userid"] ?></td>
            <td>
            <button><a href="hapus_index.php">HAPUS</a></button>
            </td>
        </tr>
        <?php
        $i++;
     } ?>    
        </tbody>
    </table>
        </div>
    </article>
    <footer>
        <h3>DIBUAT OLEH RADIS VERUANSYAH</h3>
        <h2><a href="">LOG OUT</a></h2>
        <a href="login.php">silahkan login untuk menambahkan data</a>
    </footer>
    
</body>
</html>