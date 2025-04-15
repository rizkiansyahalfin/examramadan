<!-- ### Soal 14

Buatlah sebuah **fungsi rekursif dalam PHP** untuk menghitung **faktorial** dari sebuah angka.

---

### Contoh:

**Input:**
```
5
```

**Output:**
```
120
```

*(Karena 5! = 5 × 4 × 3 × 2 × 1)*

---

### Petunjuk:
- Gunakan **fungsi rekursif**, yaitu fungsi yang memanggil dirinya sendiri.
- Gunakan **kondisi dasar** (base case) untuk menghentikan rekursi, misalnya:
  ```php
  if ($n <= 1) return 1;
  ``` -->

  <?php

function faktorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * faktorial($n - 1);
}

// Contoh input
$input = 5;
$hasil = faktorial($input);

// Output
echo "$input! = $hasil\n";

// Output dinamis
echo "Masukkan angka: ";
$angka = (int)trim(fgets(STDIN));
echo "$angka! = " . faktorial($angka) . "\n";
