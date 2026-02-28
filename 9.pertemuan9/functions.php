<?php
    $connection = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query){
        global $connection;
        $result = mysqli_query($connection, $query); //pusat nya data
        $rows = [];

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
            // rows[] = nagkep data "nama" "nim" "jurusan" pokonya isi table mahasiswa dari $row
            // $row = memasukan data table ke $rows[];
        }

        return $rows;
    }
    

?>
