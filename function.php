<?php
    $koneksi = mysqli_connect("localhost","root","", "gallery");

    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi,$query);
        $rows=[];

        while($row= mysqli_fetch_assoc($result)){
            $rows[]=$row;
        };

        return $rows;
    }
        function hapus($id){
            global $conn;
            mysqli_query($coon, "DELETE FROM album WHERE id = $id");


            return mysqli_affected_rows($conn);
        }
?>