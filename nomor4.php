<!-- ### Soal 4

Buatlah sebuah **game sederhana bernama "Quinque Elementorum"**, mirip seperti permainan **batu-gunting-kertas**, namun menggunakan **5 elemen**:

- **Api**
- **Air**
- **Tanah**
- **Angin**
- **Es**

#### Aturan Permainan:

| Elemen | Menang dari                | Kalah dari           |
|--------|----------------------------|-----------------------|
| Api    | Es, Angin                  | Air, Tanah           |
| Air    | Api, Tanah                 | Angin, Es            |
| Tanah  | Api, Angin                 | Air, Es              |
| Angin  | Air, Es                    | Api, Tanah           |
| Es     | Air, Tanah                 | Api, Angin           |

#### Ketentuan:
- Jika **dua elemen sama**, maka hasilnya adalah **seri**.  
  Contoh: *Angin vs Angin → Seri*.
- Buat game ini dalam bentuk fungsi/program interaktif (bisa CLI atau Web).
- Pemain memilih satu elemen.
- Komputer memilih satu elemen secara acak.
- Program akan menampilkan siapa pemenangnya atau apakah hasilnya seri. -->

<?php

$elemen = ['api', 'air', 'tanah', 'angin', 'es'];

// Aturan kemenangan
$aturan = [
    'api'   => ['menang' => ['es', 'angin'], 'kalah' => ['air', 'tanah']],
    'air'   => ['menang' => ['api', 'tanah'], 'kalah' => ['angin', 'es']],
    'tanah' => ['menang' => ['api', 'angin'], 'kalah' => ['air', 'es']],
    'angin' => ['menang' => ['air', 'es'], 'kalah' => ['api', 'tanah']],
    'es'    => ['menang' => ['air', 'tanah'], 'kalah' => ['api', 'angin']],
];

// Fungsi main
function mainGame($pemain, $komputer, $aturan) {
    echo "Pemain memilih: $pemain\n";
    echo "Komputer memilih: $komputer\n";

    if ($pemain === $komputer) {
        return "Hasil: Seri!";
    } elseif (in_array($komputer, $aturan[$pemain]['menang'])) {
        return "Hasil: Kamu Menang!";
    } else {
        return "Hasil: Kamu Kalah!";
    }
}

// Simulasi permainan
// (Diimplementasikan input CLI, bisa diganti ke form HTML jika web)
echo "Pilih elemen (api, air, tanah, angin, es): ";
$pemain = trim(fgets(STDIN));

if (!in_array($pemain, $elemen)) {
    echo "Elemen tidak valid.\n";
    exit;
}

$komputer = $elemen[array_rand($elemen)];

echo mainGame($pemain, $komputer, $aturan);
?>
