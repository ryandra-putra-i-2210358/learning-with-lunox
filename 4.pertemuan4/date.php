<!-- Funtion -->
<?php 

    // Built in function


    // time() // melihat waktu Epoch time
    // date() // untuk menampilkan tanggal dengan format tertentu
    // mktime() // 
    // strtotime()


    //DATE

    // echo date("l, d-M-Y"); // date butuh paramter minimal 1
    // parameter "l" itu hari nya
    // parameter "d" itu tanggal
    // Parameter "M" itu bulan
    // Parameter "m" itu bulan tapi angka
    // Paramter "Y" itu year

    // $today = date("H:i:s"); 
    // echo $today;

    //TIME
    //UNIX Timestamp / EPOCH time = ASAL MULA WAKTU DIDUNIA Komputer IT
    // DETIK YANG SUDAH BERLALU 1 JANUARI 1970 SAMPAI SAAT 18 MEI 2025


    // echo time(); //ini adalah detik 
    // 60*60*24 = itu udah sehari tigal mau di kali berapa kedepan harinya
    // 60*60*24*365 = itu udah satu tahun
    // misal 60*60*24 * 3 = berati 3 hari ibarat 60*60*24 itu 1 hari
    // jadi 1hari x3 = hari

    // kalau ke masa lalu berati -60*60*24*3 gitu aja
    //artinya 3 hari yang lalau hari apa
    // echo date('l', time()+60*60*24); //menampilkan hari ini dan waktunya saat ini
    echo date("d-M-Y" ,time()); // mehilhat tanggal


    // MKTIME PARAMETER NYA ADA 6

    // mktime(0, 0, 0, 0, 0, 0)
    // jam, menit, detik, bulan, tanggal, tahun

    echo date("l, d-M-Y",  mktime(0, 0, 0, 9, 4, 2003));
    echo date("l, d-M-Y",  mktime(0, 0, 0, 1, 18, 2003));
    // echo mktime(0, 0, 0, 9, 4, 2003);
    // echo mktime(0, 0, 0, 1, 18, 2003);



    // STRTOTIME  // FORMATNYA TANGGAL BULAN TAHUN BIASA
    echo date('l, d-M-Y', strtotime('18 sep 2003'));
    echo date('l, d-M-Y', strtotime('18 jan 2003'));



    //FUNTION UNTUK STRING

    // strlen() untuk menghitung panjang sebuah string lenght
    // strcmp() untuk membandingkan 2 buah string
    // explode() memecah string menjadi array untuk memngambil sebuah file
    // htmlspecialchars() menjaga kita sari hekker

    // utility fungsi bantuan
    // var_dump() untuk mencetak isi variabl array
    // isset() buat negcek apakah variabel udah di bikin atau belum // true atau false

    //empty() apakah yang variabel yang ada itu kosong apa tidak
    
    // die() untuk memberhentikan program
    // sleep() untuk mmeberhentikan sementara




    //USER-DEFINED FUNCTION

    //



?> 


















