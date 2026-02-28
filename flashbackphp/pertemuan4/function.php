<?php 
    //Date
    //Untuk menampilkan tanggal dengan format tertentu

    echo date("l, d-M-Y"); 
    // Wednesday, 10-Sep-2025


    // Time
    // UNIX Timestamp / EPOCH time, detik asal mula di dunia komputer
    // detik yang sudah berlalu sejak 1 januari 1970

    // echo time();

    echo date("d M Y", time()-60*60*24*96);
    
    
    // echo date("d M Y", time()-60*60*24*96);

    // MKTIME
    // mktime(0,0,0,0,0,0)
    //jam, menit, detik, bulan, tanggal, tahun,
    
    echo date ("l", mktime(0, 0, 0, 1, 18, 2003));


    // strtotime
    //masukan string

    echo date( "l", strtotime("18 jan 2003"));


    // untuk function string
    
    // strlen()
    // strcmp()
    // explode()
    // htmlspecialchars()
    
    // utility
    // var_dump() mengecek type data
    // isset() mengecek varaibel apakah sudah di bikin atau belum 
    // empty() mengecek apakah varibel ada nilai atau tidak
    // die() untuk memberikan peberhrntian program kita
    // sleep() untuk menbehentikan 2 detik atau mau berpapapun bisa berhenti sementara lalu di jalankan lagi



    // User-defined Function


?>