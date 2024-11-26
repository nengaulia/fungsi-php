<?php
//yang mengembalikan nilai
function menampilkan(){
    echo "hello php";
}
menampilkan();
echo"\n";
//yang tidak mengembalikan nilai
function menjumlahkan ($angka1, $angka2){
  $menjumlahkan=$angka1 + $angka2;
  echo $menjumlahkan;
}
menjumlahkan(9,8);
?>