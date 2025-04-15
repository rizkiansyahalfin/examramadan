<!-- ### Soal 6

Buatlah sebuah **fungsi PHP** yang menerima **string dalam bentuk bebas** (huruf kapital semua, huruf kecil semua, campuran, dll), kemudian mengembalikan string tersebut dalam format:

📌 **"Capital Sentence Only"**  
Artinya:  
- Hanya **huruf pertama setiap kata** yang ditulis kapital.
- Namun, untuk **kata sambung dan kata hubung umum** seperti:  
  `dan`, `atau`, `yang`, `di`, `ke`, `dari`, `pada`, `untuk`, dll, harus tetap **huruf kecil**, **kecuali jika berada di awal kalimat**.

#### Contoh Input & Output:

| Input                                                | Output                                          |
|------------------------------------------------------|--------------------------------------------------|
| `DAUN YANG JATUH TAK AKAN MENYALAHKAN ANGIN`         | `Daun yang Jatuh Tak Akan Menyalahkan Angin`    |
| `laut bercerita`                                     | `Laut Bercerita`                                |
| `NeGeRi AntAH BerAntAH`                              | `Negeri Antah Berantah`                         | -->

<?php

function capitalSentenceOnly($kalimat) {
    // Kata sambung yang harus tetap kecil
    $kataKecil = ['yang', 'dan', 'di', 'ke', 'dari', 'untuk', 'atau', 'dengan', 'karena', 'tetapi', 'oleh'];

    // Ubah semua jadi lowercase, lalu pisah kata-katanya
    $kataArray = explode(" ", strtolower($kalimat));

    // Capitalize per kata, kecuali kata sambung
    $hasil = [];
    foreach ($kataArray as $i => $kata) {
        if ($i === 0 || !in_array($kata, $kataKecil)) {
            // Kapitalisasi huruf pertama
            $hasil[] = ucfirst($kata);
        } else {
            // Biarkan lowercase
            $hasil[] = $kata;
        }
    }

    return implode(" ", $hasil);
}

// Contoh penggunaan
echo capitalSentenceOnly("DAUN YANG JATUH TAK AKAN MENYALAHKAN ANGIN") . "\n";
echo capitalSentenceOnly("NeGeRi AntAH BerAntAH") . "\n";
echo capitalSentenceOnly("laut bercerita") . "\n";
?>
