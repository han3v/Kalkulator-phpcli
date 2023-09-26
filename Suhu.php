#!/usr/bin/php
<?php
echo "
=====================================================
                 {Kalkulator Suhu}
=====================================================
" . PHP_EOL;

//awal memasukkan input
echo "Masukan suhu Celcius : ";
  $input1 = fopen("php://stdin", "r");
  $isi_input1 = trim(fgets($input1));
echo PHP_EOL;

//pilihan yanh akan di konversi  
echo "Pilih suhu yang akan di konversi :
 1. Reamur
 2. Kelvin
 3. Farenheit
  " . PHP_EOL . "Silahkan pilih : ";
  $input2 = fopen("php://stdin", "r");
  $isi_input2 = trim(fgets($input2));
  
//logika konversi
switch($isi_input2) {
  case "1":
    echo "Suhu Reamur : " . (4/5) * $isi_input1 . PHP_EOL;
    break;
    case "2":
    echo "Suhu Kelvin : " . $isi_input1 + 273 . PHP_EOL;
    break;
   case "3":
    echo "Suhu Farenheit : " . ((9/5) * $isi_input1 + 32) . PHP_EOL;
    break;
    default:
     echo "Pastikan inputan benar" . PHP_EOL;
}

?>