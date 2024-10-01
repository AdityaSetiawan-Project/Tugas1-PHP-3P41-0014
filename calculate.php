<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $member = $_POST['member'];
    $total_pembelian = $_POST['total'];

    if ($member == 'yes') {
        // Member
        if ($total_pembelian >= 500000) {
            $diskon = 0.10;  // Diskon 10%
        } elseif ($total_pembelian >= 300000) {
            $diskon = 0.05;  // Diskon 5%
        } else {
            $diskon = 0.10;  // Diskon member saja (tanpa syarat)
        }
    } else {
        // Non-member
        if ($total_pembelian >= 500000) {
            $diskon = 0.10;  // Diskon 10%
        } else {
            $diskon = 0.0;   // Tidak ada diskon
        }
    }

    $potongan_harga = $total_pembelian * $diskon;
    $total_bayar = $total_pembelian - $potongan_harga;

    echo "<h1>Hasil Perhitungan</h1>";
    echo "Total Pembelian: Rp " . number_format($total_pembelian, 0, ',', '.') . "<br>";
    echo "Diskon: " . ($diskon * 100) . "%<br>";
    echo "Potongan Harga: Rp " . number_format($potongan_harga, 0, ',', '.') . "<br>";
    echo "Total yang Harus Dibayar: Rp " . number_format($total_bayar, 0, ',', '.');
}
?>