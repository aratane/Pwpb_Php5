<?php

$jmlBelanja = 15000;
$diskon;

$diskon = $jmlBelanja * 10 / 100;
$jmlBayar = $jmlBelanja - $diskon;

if ($jmlBelanja >= 10000) {
  echo "Jumlah yang harus kamu bayar $jmlBelanja <br>";
  echo "Kamu mendapatkan potongan 10%, jadi jumlah yg harus kamu bayar adalah $jmlBayar";
} else {
  echo "Jumlah yang harus kamu bayar $jmlBelanja";
}
// copyright @IhsanMaulana
 ?>
