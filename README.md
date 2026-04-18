# Mancing Mania 

Aplikasi Manajemen Data (CRUD) berbasis Framework Laravel untuk mencatat hasil tangkapan pancingan. Proyek ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Web.

---

## Fitur Utama
- **Create:** Menambah data tangkapan (Spesies, Berat, Lokasi, Umpan).
- **Read:** Menampilkan tabel daftar hasil pancingan yang rapi.
- **Update:** Mengubah data jika ada kesalahan input.
- **Delete:** Menghapus data dari database.
- **Dropdown Lokasi:** Pilihan lokasi pancingan populer di Bengkulu.
- **UI Simpel:** Desain bersih dan mudah digunakan.
---

## Panduan Instalasi (Cara Menjalankan)

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek di laptop Anda:

### 1. Persiapan Awal
Pastikan Anda sudah menginstal **Laragon** atau **XAMPP**, **Composer**, dan **Git**.

### 2. Clone Repositori
Buka terminal/CMD, lalu jalankan:
```bash
git clone [https://github.com/SanVen-Blip/tugas-laravel-crud-mancing.git](https://github.com/SanVen-Blip/tugas-laravel-crud-mancing.git)
cd tugas-laravel-crud-mancing
```

### 3. Instal Library (Dependencies)
```Bash
composer install
```

### 4. Setup Environment
Salin file .env.example menjadi .env:

```Bash
cp .env.example .env
Jangan lupa atur koneksi database Anda di dalam file .env tersebut.
```

### 5. Generate Security Key
```Bash
php artisan key:generate
```

### 6. Migrasi Database
Buat tabel pancingan secara otomatis dengan perintah:
```Bash
php artisan migrate
```

### 7. Jalankan Aplikasi
```Bash
php artisan serve
```
Aplikasi bisa diakses di browser melalui alamat: http://127.0.0.1:8000/pancingans
