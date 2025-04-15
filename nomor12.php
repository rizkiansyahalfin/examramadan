<!-- 
### Soal 12

Buatlah sebuah program PHP dengan menggunakan **konsep OOP** untuk menghitung **luas bangun datar**, dengan ketentuan sebagai berikut:

---

### Ketentuan:

#### 1. **Buat class utama** bernama `BangunDatar`  
- Class ini akan menjadi **induk (parent)** dari semua bangun datar.
- Gunakan **method polymorphism** untuk menghitung luas (misalnya: `hitungLuas()`).

#### 2. Buat class turunan:
- `Persegi` → turunan dari `BangunDatar`
- `Lingkaran` → turunan dari `BangunDatar`

#### 3. Method yang harus ada:
- `hitungLuas()` → akan di-**override** di setiap class turunan dengan rumus masing-masing

---

### Input & Output:

**Input:**
- Persegi dengan sisi = 5
- Lingkaran dengan jari-jari = 7

**Output:**
```
Luas Persegi: 25
Luas Lingkaran: 153.938 (gunakan π = 3.14159)
```

---

### Petunjuk:
- Gunakan **inheritance (pewarisan)**.
- Gunakan **polymorphism** untuk menerapkan `hitungLuas()` dengan cara yang berbeda di tiap class turunan.
- Gunakan konstanta `π = 3.14159` untuk lingkaran. -->

<?php

abstract class BangunDatar {
    abstract public function hitungLuas();
}

class Persegi extends BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

class Lingkaran extends BangunDatar {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function hitungLuas() {
        return pi() * pow($this->jariJari, 2);
        
        // Output dibulatkan
        // return round(pi() * pow($this->jariJari, 2), 2);
    }
}

// Input
$persegi = new Persegi(5);
$lingkaran = new Lingkaran(7);

// Output
echo "Luas Persegi (sisi = 5): " . $persegi->hitungLuas() . "\n";
echo "Luas Lingkaran (r = 7): " . $lingkaran->hitungLuas() . "\n";


