<!-- ### Soal 13

Buatlah sebuah program PHP yang menggunakan **interface** untuk menghitung **volume bangun ruang**.

---

### Ketentuan:

#### 1. Buat sebuah **interface** bernama `BangunRuang`:
- Interface ini harus memiliki satu method:  
  ```php
  public function hitungVolume();
  ```

#### 2. Buat class yang mengimplementasikan interface `BangunRuang`:
- `Kubus`: dengan atribut `sisi`
- `Bola`: dengan atribut `jariJari`

#### 3. Gunakan rumus:
- **Volume Kubus** = sisi³ → `pow($sisi, 3)`
- **Volume Bola** = (4/3) × π × r³ → `4/3 * pi * pow($r, 3)`  
  (Gunakan `π = 3.14159`)

---

### Contoh Input:
```php
$kubus = new Kubus(5);
$bola = new Bola(7);
```

### Contoh Output:
```
Volume Kubus: 125
Volume Bola: 1436.76
```

---

### Petunjuk:
- Gunakan `pow()` untuk menghitung pangkat.
- Terapkan **konsep interface dan implementasi class** dengan baik. -->

<?php

interface BangunRuang {
    public function hitungVolume();
}

class Kubus implements BangunRuang {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungVolume() {
        return pow($this->sisi, 3);
    }
}

class Bola implements BangunRuang {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungVolume() {
        return (4/3) * pi() * pow($this->jariJari, 3);
    }
}

// Input
$kubus = new Kubus(4); // sisi = 4
$bola = new Bola(5);   // jari-jari = 5

// Output
echo "Volume Kubus (sisi = 4): " . $kubus->hitungVolume() . "\n";
echo "Volume Bola (r = 5): " . round($bola->hitungVolume(), 2) . "\n";
