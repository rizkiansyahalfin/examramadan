<!-- ### Soal 10

Buatlah **sistem manajemen berbasis OOP di PHP** yang memiliki **tiga level pengguna**, dengan kemampuan sebagai berikut:

#### Level Pengguna & Kemampuan:

| Level      | Kemampuan                                                                 |
|------------|---------------------------------------------------------------------------|
| **User**       | Mengunggah pesan                                                       |
| **Moderator**  | Mengunggah pesan, **menghapus pesan** (turunan dari `User`)           |
| **Admin**      | Mengunggah, **menghapus**, dan **menyematkan pesan** (turunan dari `Moderator`) |

---

### Ketentuan Teknis:

1. Gunakan konsep **OOP (Object-Oriented Programming)**:
   - Buat kelas `User`, `Moderator`, dan `Admin` menggunakan **pewarisan (inheritance)**.
2. Setiap aksi pengguna (upload, hapus, sematkan) harus **tercatat dalam log**, dengan informasi berikut:
   - **Timestamp** (waktu kejadian)
   - **Jenis pengguna** (User / Moderator / Admin)
   - **Username**
   - **Deskripsi aksi**
3. Buatlah kelas `Logger` dengan **metode statis (static)** untuk mencatat log aksi.
4. **Log harus diurutkan** dari **yang terbaru ke yang terlama** saat ditampilkan.
5. Pastikan pengguna **tidak bisa melakukan aksi yang tidak diizinkan**.
   - Contoh: `User` biasa **tidak boleh menghapus** atau **menyematkan pesan**.
   - Sistem harus mencegah atau memberi pesan peringatan jika aksi dilanggar. -->

   <?php

class Logger {
    private static array $logs = [];

    public static function log($userType, $username, $action) {
        $timestamp = date('Y-m-d H:i:s');
        self::$logs[] = [
            'timestamp' => $timestamp,
            'userType' => $userType,
            'username' => $username,
            'action' => $action
        ];
    }

    public static function showLogs() {
        $sortedLogs = array_reverse(self::$logs); // dari terbaru ke terlama
        foreach ($sortedLogs as $log) {
            echo "[{$log['timestamp']}] [{$log['userType']}] {$log['username']} - {$log['action']}\n";
        }
    }
}

class User {
    protected string $username;
    protected string $userType = "User";

    public function __construct($username) {
        $this->username = $username;
    }

    public function unggahPesan($pesan) {
        Logger::log($this->userType, $this->username, "Mengunggah pesan: \"$pesan\"");
    }

    public function hapusPesan($pesan) {
        echo "Akses ditolak: User tidak bisa menghapus pesan.\n";
    }

    public function sematkanPesan($pesan) {
        echo "Akses ditolak: User tidak bisa menyematkan pesan.\n";
    }
}

class Moderator extends User {
    protected string $userType = "Moderator";

    public function hapusPesan($pesan) {
        Logger::log($this->userType, $this->username, "Menghapus pesan: \"$pesan\"");
    }

    public function sematkanPesan($pesan) {
        echo "Akses ditolak: Moderator tidak bisa menyematkan pesan.\n";
    }
}

class Admin extends Moderator {
    protected string $userType = "Admin";

    public function sematkanPesan($pesan) {
        Logger::log($this->userType, $this->username, "Menyematkan pesan: \"$pesan\"");
    }
}

// Buat akun
$user = new User("Rian");
$mod = new Moderator("Dina");
$admin = new Admin("Bagas");

// Aksi mereka
$user->unggahPesan("Halo, dunia!");
$user->hapusPesan("Halo, dunia!");

$mod->unggahPesan("Pesan penting");
$mod->hapusPesan("Pesan penting");
$mod->sematkanPesan("Pesan penting");

$admin->unggahPesan("Info Admin");
$admin->hapusPesan("Info Admin");
$admin->sematkanPesan("Info Admin");

// Tampilkan log
echo "\n=== LOG AKTIVITAS ===\n";
Logger::showLogs();
