<?php


function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

if ($_POST['ya']) {
    $nama = $_POST['nama'];
    $bulan = $_POST['bulan'];
    $tunjangan = $_POST['ya'];
    $gaji = $_POST['gaji'];

    $memiliki_tunjangan = 500000;
    $bpjs = 45000;
    $pajak = 75000;
    $bpjs_pajak = $bpjs + $pajak;
    $totalpengurangan = $bpjs_pajak * $bulan;
    $tunjanganxbulan = $bulan * $memiliki_tunjangan;
    $gaji_bersih = $gaji + $memiliki_tunjangan - $bpjs_pajak;

    $total_gaji = $gaji * $bulan + $tunjanganxbulan - $totalpengurangan;
    echo "<h2>Karayawan Memiliki Tunjangan</h2> <br>";
    echo "Nama Karyawan : " . $nama . "<br>";
    echo "Gaji Karyawan : " . rupiah($gaji) . "<br>";
    echo "Tunjangan : " . rupiah($memiliki_tunjangan) . "<br>";
    echo "Potongan BPJS : " . rupiah($bpjs) . "<br>";
    echo "Potongan Pajak : " . rupiah($pajak) . "<br>";
    echo "=========================================== <br>";
    echo "Gaji Bersih : " . rupiah($gaji_bersih) . "<br>";
    echo "=========================================== <br>";
    echo "Total Gaji : " . rupiah($total_gaji) . " selama " . $bulan . "<br>";
    echo "<a href='1.php'>Kembali Ke Soal 1</a>";
} else if ($_POST['tidak']) {
    $nama = $_POST['nama'];
    $bulan = $_POST['bulan'];
    $gaji = $_POST['gaji'];


    $bpjs = 45000;
    $pajak = 75000;
    $bpjs_pajak = $bpjs + $pajak;
    $totalpengurangan = $bpjs_pajak * $bulan;
    $gaji_bersih = $gaji - $bpjs_pajak;

    $total_gaji = $gaji * $bulan - $totalpengurangan;

    echo "<h2>Karayawan Tidak Memiliki Tunjangan</h2> <br>";
    echo "Nama Karyawan : " . $nama . "<br>";
    echo "Gaji Karyawan : " . rupiah($gaji) . "<br>";
    echo "Potongan BPJS : " . rupiah($bpjs) . "<br>";
    echo "Potongan Pajak : " . rupiah($pajak) . "<br>";
    echo "=========================================== <br>";
    echo "Gaji Bersih : " . rupiah($gaji_bersih) . "<br>";
    echo "=========================================== <br>";
    echo "Total Gaji : " . rupiah($total_gaji) . " selama " . $bulan . "<br>";
    echo "<a href='1.php'>Kembali Ke Soal 1</a>";
}
