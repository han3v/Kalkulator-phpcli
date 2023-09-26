#!/usr/bin/php
<?php 
echo "
====================================================
               {Kalkulator PHP-CLI}
====================================================
";
echo "Masukan Nilai 1 : ";
  $input_nomor = fopen("php://stdin","r");
  $satu = trim(fgets($input_nomor));
echo "Masukan Nilai 2 : ";
  $input_nomor_nomor = fopen("php://stdin", "r");
  $dua = trim(fgets($input_nomor_nomor));
echo "pilih (+,-,x,:) : ";
  $isi = fopen("php://stdin","r");
  $isi_isi = trim(fgets($isi));
switch($isi_isi)  {
  case "+" :
    echo "hasilnya : " . $satu + $dua . PHP_EOL;
  break;
  case "-" :
    echo "hasilnya : " . $satu - $dua . PHP_EOL;
  break;
  case "x" :
    echo "hasilnya : " . $satu * $dua . PHP_EOL;
  break;
  case ":" :
    echo "hasilnya : " . $satu / $dua . PHP_EOL;
  break;
  default:
    echo "Pastikan inputan benar" . PHP_EOL;
}
?>