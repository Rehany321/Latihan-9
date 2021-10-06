<?php

$qty_barang = 0;
$qty_barang_1 = 3;  //Baju
$qty_barang_2 = 4;  //Kemeja
$qty_barang_3 = 2;  //Dress

$diskon_barang_3 = 20 / 100;  //Diskon 20% Khusus Barang 3 (Dress)
$diskon_khusus = 0;
$total = 0;
$totalAll = 0;
$nama_barang = "Kemeja";

switch ($nama_barang) {
    case 'Baju':
        $harga1 = 20000;
        $qty_barang = $qty_barang + $qty_barang_1;
        $total = $qty_barang * $harga1;
        $totalAll =  $totalAll + $total;
        break;
    case 'Kemeja':
        $harga2 = 30000;
        $qty_barang = $qty_barang + $qty_barang_2;
        $total = $qty_barang * $harga2;
        $totalAll =  $totalAll + $total;
        break;
    case 'Dress':
        $harga3 = 50000;
        $qty_barang = $qty_barang + $qty_barang_3;
        $total = $qty_barang * $harga3;
        $diskon_khusus = $total * $diskon_barang_3;
        $totalAll =  $total - $diskon_khusus;
        break;
}

if ($totalAll > 75000) {
    $diskon = ($totalAll * 15 / 100);
    $totalAll = $totalAll - $diskon;
} else {
    $diskon = 0;
    $totalAll = $totalAll - $diskon;
}

echo "Nama Barang = " . $nama_barang . "<br/>";
echo "Jumlah Barang = " . $qty_barang . "<br/>";
echo "Jumlah Bayar = Rp." . $total . "<br/>";
echo "Diskon Khusus Barang = Rp." . $diskon_khusus . "<br/>";
echo "Diskon Pembelian Diatas 75.000 = Rp." . $diskon . "<br/>";
echo "Total Bayar = Rp." . $totalAll . "<br/>";


?>