### Soal 3

Buatlah sebuah **fitur perpustakaan** sederhana menggunakan PHP yang memiliki kemampuan sebagai berikut:

#### Fitur Utama:
1. **Menambahkan Buku**  
   Setiap buku memiliki informasi:
   - `judul`
   - `penulis`
   - `tahun_terbit`

2. **Melihat Daftar Buku**  
   Tampilkan seluruh data buku yang sudah tersimpan di database.

3. **Pencarian Buku**  
   Dapat mencari buku berdasarkan **judul** atau **penulis**.

#### Syarat Teknis:
- Harus **tersambung ke database** (gunakan MySQL).
- Gunakan PHP untuk melakukan operasi **Tambah Buku**, **Tampilkan Buku**, dan **Search Buku**.
- Buat struktur database yang sesuai untuk menyimpan data buku (tabel dengan kolom: `id`, `judul`, `penulis`, `tahun_terbit`).

### Cara Menjalankan:
Import file SQL ke database (phpMyAdmin atau CLI).

Simpan file PHP dalam folder project (misal: www/nomor3/).

Akses melalui browser:

http://localhost/nomor3/tambah.php → tambah buku

http://localhost/nomor3/daftar.php → lihat/search buku