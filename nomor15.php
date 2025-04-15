<!-- ### Soal 15

Buatlah sebuah **program PHP** untuk menampilkan **deret Fibonacci** sebanyak `n` nilai.

---

### Contoh:

**Input:**
```
10
```

**Output:**
```
0, 1, 1, 2, 3, 5, 8, 13, 21, 34
```

---

### Petunjuk:
- Gunakan **looping** (`for` atau `while`) untuk membentuk deret Fibonacci.
- Fibonacci adalah deret di mana:
  - Dua nilai awal adalah `0` dan `1`
  - Nilai berikutnya adalah hasil penjumlahan dua nilai sebelumnya  
    (Fn = Fn-1 + Fn-2) -->

    <?php

function fibonacci($n) {
    $a = 0;
    $b = 1;
    $hasil = [];

    for ($i = 0; $i < $n; $i++) {
        $hasil[] = $a;
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    echo implode(", ", $hasil) . "\n";
}

// Contoh input
$jumlah = 10;
fibonacci($jumlah);

// Contoh input dinamis
echo "Masukkan jumlah deret Fibonacci yang diinginkan: ";
$n = (int)trim(fgets(STDIN));
fibonacci($n);
