<!-- ### Soal 11

Buatlah sebuah **program PHP** untuk menghitung jumlah bilangan **prima** dalam suatu **rentang tertentu**.

#### Contoh:

**Input:**
```
Rentang: 10 - 30
```

**Output:**
```
11, 13, 17, 19, 23, 29  
(Total: 6)
```

---

### Petunjuk:
- Buat fungsi bernama `isPrime($number)` untuk memeriksa apakah sebuah angka merupakan **bilangan prima**.
- Gunakan **perulangan** untuk mengecek setiap angka dalam rentang dan mencatat jumlah yang merupakan bilangan prima.
- Tampilkan:
  - Daftar bilangan prima yang ditemukan.
  - Total jumlah bilangan prima. -->

  <?php

// Fungsi untuk mengecek apakah suatu bilangan adalah prima
function isPrime($num) {
    if ($num <= 1) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) return false;

    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) return false;
    }

    return true;
}

// Fungsi untuk mencetak bilangan prima dalam rentang tertentu
function hitungPrima($mulai, $akhir) {
    $primas = [];

    for ($i = $mulai; $i <= $akhir; $i++) {
        if (isPrime($i)) {
            $primas[] = $i;
        }
    }

    echo implode(", ", $primas) . " (Total: " . count($primas) . ")\n";
}

// Contoh pemakaian:
$mulai = 10;
$akhir = 30;

hitungPrima($mulai, $akhir);

// Contoh pemakaian dinamis:
echo "Masukkan batas awal: ";
$mulai = (int)trim(fgets(STDIN));

echo "Masukkan batas akhir: ";
$akhir = (int)trim(fgets(STDIN));

hitungPrima($mulai, $akhir);
