<!-- ### Soal 9

Buatlah sebuah **program PHP** untuk mencetak **pola segitiga bilangan terbalik**, berdasarkan input angka `n`.

#### Contoh:

**Input:**
```
n = 5
```

**Output:**
```
5 4 3 2 1
4 3 2 1
3 2 1
2 1
1
```

---

### Petunjuk:
- Gunakan **looping bersarang** (`for` atau `while`).
- Gunakan **logika perulangan menurun**, dari `n` ke `1`.
- Setiap baris dimulai dari angka yang menurun hingga 1, sesuai barisnya. -->

<?php

function segitigaTerbalik($n) {
    for ($i = $n; $i >= 1; $i--) {
        for ($j = $i; $j >= 1; $j--) {
            echo $j . " ";
        }
        echo "\n";
    }
}

// Contoh pemakaian:
$n = 5;
segitigaTerbalik($n);

// Contoh pemakaian dinamis:
echo "Masukkan nilai n: ";
$n = (int)trim(fgets(STDIN));
segitigaTerbalik($n);