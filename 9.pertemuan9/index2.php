<?php 
    // menghubungkan halaman ini ke koneksi database
    // ======================= mysqli_connect("namahostnya", "usernamemysqlnya", "passwornsqlnya (biasanya kosong)", "nama databsenya")=======================;
    // simpan ke  variabel fungsi mysqlinya
    $connection = mysqli_connect("localhost", "root", "", "phpdasar"); // ============== untuk mengoneksikan =============

    //ambil data dari tabel mahasiswa / query data mahasiswa dengan function dan parameternya adalah
    // ========================== mysqli_query("varibael isinya konesi database", "query untuk mengambil tabel mahasiswa"); ============================
    $result = mysqli_query($connection, "SELECT * FROM mahasiswa"); // ============= untuk mengambil data dari table mahasiwa =============
    // 1. gak bisa pakai echo $result bisanya pakai var_dump()
    // var_dump($result);

    // 2. mengecek erorrs bisa (optional)
    // kteika si (!$resultnya = false) atau erorr atau flase maka tampilkan errornya
    // if(!$result){
    //     echo mysqli_error($connection);
    // }

    // 3. cara tampilan data di $result sebenernya bisa cuma dia teh kaya masih ada di dalam lemari jadi di dlaam lemari tersebut ada data cuma terkucnci dengan lemari
    // ambil data (fetch) mahasiswa dari object result
    // ada 4 cara dari object atau varibel result
    
    // =============================== didalam function ini harus ada VARIABEL isinya  == mysqli_query ya =========================================
    // mysqli_fetch_row() // mengembalikan array numerik indeknya angka
    // mysqli_fetch_assoc() // mengembalikan array associative yang indexnya nama
    // mysqli_fetch_array() // mengembalikan keduanya bisa array numerik bisa asscosiative jadi flexibel
    // mysqli_fetch_object() // megembalikan niali object

    // cara penguanaanya 

    // 1. pengunaaan mysqli_fetch_row()
    // $data = mysqli_fetch_row($result);
    // var_dump($data);
    // var_dump($data[3]);
    // var_dump($data[2])
    
    // 2.pengunaan mysqli_fetch_assoc()
    // $data = mysqli_fetch_assoc($result);
    // var_dump($data["nama"]);
    // var_dump($data["jurusan"]);
    
    // 3.pengunaan mysqli_fetch_array()
    //jadi kaya mangil array numerik dan array associative secara double
    // $data = mysqli_fetch_array($result);
    // var_dump($data[2]);
    // var_dump($data["nim"]);
    
    // 4.pengunaan mysqli_fetch_object()
    // $data = mysqli_fetch_object($result);
    //var_dump($data["nama"]); // ini gak bisa kalau object karena mengebalikan object
    //var_dump($data[0]); // ini gak bisa kalau object karena mengebalikan objct
    // var_dump($data->email); // kaya gini baru bisa
    // var_dump($data->nama); // kaya gini baru bisa


    // ini cara mengambil data cuma 1x saja jadi tampilnya hanya 1
    // kalu mau megambil datnya semua harus di pangil berulang ulang
    // jadi  kalau mau tampil datanya semuanya harus pakai perulangan while kaya foreach

    // while($data = mysqli_fetch_assoc($result)){
    //     var_dump($data);
    // }

    // sperti ini jadinya pakai while

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>

        <?php while($data = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Ubah</a> | 
                    <a href="">Hapus</a>
                </td>
                <td><img src="image/<?= $data["gambar"]?> " width="50" alt=""></td>
                <td><?= $data["nim"] ?></td>
                <td><?= $data["nama"]?></td>
                <td><?= $data["email"] ?></td>
                <td><?= $data["jurusan"]?></td>
            </tr>
            <?php $i++;?>
        <?php endwhile; ?>


    </table>
    
</body>
</html>