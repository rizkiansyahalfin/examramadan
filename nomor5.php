<!-- ### Soal 5

Buatlah sebuah **quiz sederhana menggunakan PHP**, yang dijalankan melalui **Command Line Interface (CLI)**.  

#### Ketentuan:

- Tampilkan pertanyaan kepada pengguna.
- Berikan **opsi pilihan ganda** untuk setiap pertanyaan, misalnya:
  ```
  Pertanyaan: Di mana Ibukota Indonesia?
  a. IKN  
  b. Jakarta  
  c. Aceh  
  d. Papua

  Jawaban: b
  ```
- Setelah pengguna memilih jawaban, tampilkan apakah jawaban tersebut **benar** atau **salah**.
- Program dapat berisi **lebih dari satu pertanyaan** dan menampilkan **skor akhir** setelah semua pertanyaan selesai. -->

<?php

// Pertanyaan dan jawaban
$kuis = [
    [
        "pertanyaan" => "Di mana Ibukota Indonesia?",
        "pilihan" => [
            "a" => "IKN",
            "b" => "Jakarta",
            "c" => "Aceh",
            "d" => "Papua"
        ],
        "jawaban" => "b"
    ],
    [
        "pertanyaan" => "Apa ibu kota Jepang?",
        "pilihan" => [
            "a" => "Osaka",
            "b" => "Tokyo",
            "c" => "Kyoto",
            "d" => "Hiroshima"
        ],
        "jawaban" => "b"
    ],
    [
        "pertanyaan" => "Siapa presiden pertama Indonesia?",
        "pilihan" => [
            "a" => "Soekarno",
            "b" => "Jokowi",
            "c" => "Habibie",
            "d" => "Soeharto"
        ],
        "jawaban" => "a"
    ]
];

$skor = 0;
$total = count($kuis);

echo "===== KUIS SEDERHANA =====\n";

foreach ($kuis as $index => $item) {
    echo "\n" . ($index + 1) . ". " . $item['pertanyaan'] . "\n";

    foreach ($item['pilihan'] as $opsi => $teks) {
        echo "   $opsi. $teks\n";
    }

    echo "Jawaban: ";
    $jawaban = strtolower(trim(fgets(STDIN)));

    if ($jawaban === $item['jawaban']) {
        echo "✅ Benar!\n";
        $skor++;
    } else {
        echo "❌ Salah! Jawaban yang benar: " . strtoupper($item['jawaban']) . ". " . $item['pilihan'][$item['jawaban']] . "\n";
    }
}

echo "\n===== HASIL AKHIR =====\n";
echo "Skor kamu: $skor dari $total\n";
echo "Terima kasih sudah bermain!\n";
