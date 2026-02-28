<?php

  $nama = "Ryandra";
  echo "Hellow WOrd";
  $angka1 = 49;
  echo $nama;

  $nomer = 30;
  $nomer += 9;
  $hasil = var_dump($nomer > 15 && $nomer % 2 == 1);
  echo $hasil;

  $nama3 = "Putra";
  $total = $nama . " " . $nama3 . $nomer;
  echo $total;

  $jumlahTotal = $nomer;
  $hasil2 = ($jumlahTotal <= $angka1);

  if($hasil2 == 1){
    echo "True";
  }else {
    echo "False";
  }


  




?>