<!-- ### Soal 1

Buatlah sebuah class bernama `Mahasiswa` yang memiliki atribut:

- `nama`
- `nim`
- `nilai`
- `jurusan`

Kemudian, buatlah **method logic** untuk **mengurutkan data mahasiswa** menggunakan fungsi `usort()`, dengan ketentuan:

1. Data mahasiswa harus diurutkan berdasarkan **nilai dari yang terbesar ke yang terkecil**.
2. Jika terdapat mahasiswa dengan **nilai yang sama**, maka urutkan berdasarkan **nama secara alfabetis (A-Z)**.
3. Gunakan **fungsi callback** untuk proses pengurutan tersebut.
4. Pastikan logika pengurutan dapat menangani kasus seperti:
   - Nilai yang sama
   - Nama yang sama
   - Kombinasi keduanya -->


<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $nilai;
    public $jurusan;

    public function __construct($nama, $nim, $nilai, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->nilai = $nilai;
        $this->jurusan = $jurusan;
    }

    public static function urutkanMahasiswa(&$daftarMahasiswa) {
        usort($daftarMahasiswa, function($a, $b) {
            // Urutkan berdasarkan nilai (besar ke kecil)
            if ($a->nilai == $b->nilai) {
                // Jika nilai sama, urutkan berdasarkan nama (A-Z)
                return strcmp($a->nama, $b->nama);
            }
            return ($a->nilai < $b->nilai) ? 1 : -1;
        });
    }
}

// Contoh data
$mahasiswaList = [
    new Mahasiswa("Budi", "2023001", 85, "Informatika"),
    new Mahasiswa("Andi", "2023002", 90, "Sistem Informasi"),
    new Mahasiswa("Citra", "2023003", 85, "Teknik Komputer"),
    new Mahasiswa("Dian", "2023004", 90, "Informatika"),
    new Mahasiswa("Andi", "2023005", 85, "Sistem Informasi"),
];

// Urutkan data
Mahasiswa::urutkanMahasiswa($mahasiswaList);

// Tampilkan hasil
foreach ($mahasiswaList as $mhs) {
    echo "Nama: {$mhs->nama}, NIM: {$mhs->nim}, Nilai: {$mhs->nilai}, Jurusan: {$mhs->jurusan}\n";
}
?>
