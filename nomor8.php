<!-- ### Soal 8

Buatlah sebuah **mekanisme enkripsi dan dekripsi sederhana** menggunakan PHP, dengan metode substitusi huruf. Misalnya:

- Setiap huruf digeser **satu langkah ke kanan** dalam alfabet:
  - `A → B`
  - `B → C`
  - ...
  - `Y → Z`
  - `Z → A`
  - `M → N`
  - dan seterusnya.

#### Ketentuan:

1. Enkripsi:
   - Buat fungsi yang menerima input berupa **kalimat biasa**, lalu mengubah setiap huruf menjadi huruf berikutnya dalam alfabet.
   - Contoh: `"Halo"` → `"Ibmp"`
2. Dekripsi:
   - Buat fungsi untuk **membalikkan hasil enkripsi** kembali ke bentuk aslinya.
   - Contoh: `"Ibmp"` → `"Halo"`

3. Abaikan simbol, angka, dan spasi, atau bisa juga dibiarkan tetap sesuai kebutuhan.
4. Berlaku untuk huruf kapital maupun huruf kecil. -->

<?php

function enkripsi($teks) {
    $hasil = '';
    $panjang = strlen($teks);

    for ($i = 0; $i < $panjang; $i++) {
        $char = $teks[$i];

        // Jika huruf besar
        if (ctype_upper($char)) {
            $hasil .= chr(((ord($char) - 65 + 1) % 26) + 65);
        }
        // Jika huruf kecil
        elseif (ctype_lower($char)) {
            $hasil .= chr(((ord($char) - 97 + 1) % 26) + 97);
        }
        // Selain huruf (biarkan)
        else {
            $hasil .= $char;
        }
    }

    return $hasil;
}

function deskripsi($teks) {
    $hasil = '';
    $panjang = strlen($teks);

    for ($i = 0; $i < $panjang; $i++) {
        $char = $teks[$i];

        if (ctype_upper($char)) {
            $hasil .= chr(((ord($char) - 65 - 1 + 26) % 26) + 65);
        } elseif (ctype_lower($char)) {
            $hasil .= chr(((ord($char) - 97 - 1 + 26) % 26) + 97);
        } else {
            $hasil .= $char;
        }
    }

    return $hasil;
}

// Contoh penggunaan
$pesan = "Halo Dunia!";
$terenkripsi = enkripsi($pesan);
$terdekripsi = deskripsi($terenkripsi);

echo "Pesan asli     : $pesan\n";
echo "Hasil Enkripsi : $terenkripsi\n";
echo "Hasil Dekripsi : $terdekripsi\n";
