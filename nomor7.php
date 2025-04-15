<!-- ### Soal 7

Pak Guru ingin menilai anak muridnya secara otomatis. Untuk itu, buatlah sebuah **program sederhana menggunakan PHP** agar proses penilaian menjadi lebih cepat dan efisien.

#### Kriteria Penilaian:

| Nilai          | Output                                 |
|----------------|-----------------------------------------|
| 100            | Sempurna                               |
| 98 - 90        | Sangat Bagus                           |
| 89 - 80        | Bagus                                  |
| 79 - 70        | Lumayan                                |
| 69 - 50        | Belajar Lagi (Remidi)                  |
| 49 - 0         | Ulangi Lagi Pelajarannya 10x (Remidi)  |

#### Ketentuan:
1. Program **tidak boleh memproses nilai** di luar rentang **0–100** (jika < 0 atau > 100, **abaikan**).
2. Setelah seluruh data siswa diproses, tampilkan:
   - ✅ Jumlah siswa yang **lulus** (nilai >= 75)
   - ❌ Jumlah siswa yang **remidi**
   - ⚠️ Daftar nama siswa yang **di bawah KKM (75)** walaupun tidak semua kategori ini adalah remidi

> KKM (Kriteria Ketuntasan Minimal) = **75** -->

<?php

$kkm = 75;
$dataNilai = [
    ['nama' => 'Andi', 'nilai' => 100],
    ['nama' => 'Budi', 'nilai' => 95],
    ['nama' => 'Citra', 'nilai' => 85],
    ['nama' => 'Dewi', 'nilai' => 75],
    ['nama' => 'Eka', 'nilai' => 72],
    ['nama' => 'Fajar', 'nilai' => 65],
    ['nama' => 'Gita', 'nilai' => 40],
    ['nama' => 'Hadi', 'nilai' => -5],
    ['nama' => 'Indah', 'nilai' => 110]
];

$remidiCount = 0;
$lulusCount = 0;
$bawahKKM = [];

echo "=== HASIL PENILAIAN MURID ===\n";

foreach ($dataNilai as $siswa) {
    $nama = $siswa['nama'];
    $nilai = $siswa['nilai'];

    if ($nilai < 0 || $nilai > 100) {
        echo "$nama: Nilai tidak valid ($nilai)\n";
        continue;
    }

    // Evaluasi status kelulusan dan remidi
    $status = "";
    if ($nilai === 100) {
        $status = "Sempurna";
    } elseif ($nilai >= 90) {
        $status = "Sangat Bagus";
    } elseif ($nilai >= 80) {
        $status = "Bagus";
    } elseif ($nilai >= 70) {
        $status = "Lumayan";
    } elseif ($nilai >= 50) {
        $status = "Belajar Lagi (Remidi)";
        $remidiCount++;
    } else {
        $status = "Ulangi Lagi pelajarannya 10x (Remidi)";
        $remidiCount++;
    }

    if ($nilai >= $kkm) {
        $lulusCount++;
    } else {
        $bawahKKM[] = $nama;
    }

    echo "$nama ($nilai): $status\n";
}

echo "\n=== REKAPITULASI ===\n";
echo "Jumlah siswa remidi : $remidiCount\n";
echo "Jumlah siswa lulus  : $lulusCount\n";

if (!empty($bawahKKM)) {
    echo "Siswa di bawah KKM ($kkm): " . implode(", ", $bawahKKM) . "\n";
} else {
    echo "Semua siswa di atas KKM.\n";
}
?>
