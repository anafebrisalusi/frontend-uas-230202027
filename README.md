# 📚 SISTEM MANAJEMEN PERPUSTAKAAN
```
UAS Pemrograman Berbasis Framework
NIM    : 230202027
Nama   : Ana Febri Salusi
Kelas  : TI-2B
```

## 🚀 A. Backend
### Git Clone
```
git clone https://github.com/abdau88/uas_pbf_soal_b.git
cd uas_pbf_soal_b
```
### ⚙️ Composer intall
```
composer install
```

### 🗄️ Import Database
1. Buka phpMyAdmin
2. Buat database:  
   ```
   db_perpus_230202027
   ```
3. Import file SQL dari folder `uas_pbf_soal_b/database/`

### ⚙️ Ubah .env
```
database.default.hostname = localhost
database.default.database = db_perpus_230202027
database.default.username = root
database.default.password = 
```

### ▶️ Jalankan Aplikasi
```
php artisan serve
```

### 🔌 API Endpoint (Postman)
#### 📘 1. uas_buku

| Method | Endpoint                          | Deskripsi             |
|--------|-----------------------------------|-----------------------|
| GET    | http://localhost:8080/buku        | Menampilkan semua buku |
| POST   | http://localhost:8080/buku        | Menambahkan buku baru  |
| PUT    | http://localhost:8080/buku/{id}   | Mengubah data buku     |
| DELETE | http://localhost:8080/buku/{id}   | Menghapus buku         |

---

#### 📗 2. uas_peminjaman

| Method | Endpoint                                 | Deskripsi                    |
|--------|------------------------------------------|------------------------------|
| GET    | http://localhost:8080/peminjaman         | Menampilkan semua peminjaman |
| POST   | http://localhost:8080/peminjaman         | Menambahkan data peminjaman  |
| PUT    | http://localhost:8080/peminjaman/{id}    | Mengubah data peminjaman     |
| DELETE | http://localhost:8080/peminjaman/{id}    | Menghapus data peminjaman    |


## 🎨 B. Frontend
### 🛠️ Install Laravel
```bash
composer create-project laravel/laravel frontend-uas-230202027 "10.0"
cd frontend-uas-230202027
```

### ✨ Buat Controller
```bash
php artisan make:controller Buku
php artisan make:controller Peminjaman
```

### 🌐 Tambahkan Route di `routes/web.php`
```
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buku;
use App\Http\Controllers\Peminjaman;

Route::get('/buku', [Buku::class, 'index']);
    Route::get('/buku/create', [Buku::class, 'create']);
    Route::post('/buku', [Buku::class, 'store']);
    Route::get('/buku/{id}/edit', [Buku::class, 'edit']);
    Route::put('/buku/{id}', [Buku::class, 'update']);
    Route::delete('/buku/{id}', [Buku::class, 'destroy']);

Route::get('/peminjaman', [Peminjaman::class, 'index']);
    Route::get('/peminjaman/create', [Peminjaman::class, 'create']);
    Route::post('/peminjaman', [Peminjaman::class, 'store']);
    Route::get('/peminjaman/{id}/edit', [Peminjaman::class, 'edit']);
    Route::put('/peminjaman/{id}', [Peminjaman::class, 'update']);
    Route::delete('/peminjaman/{id}', [Peminjaman::class, 'destroy']);
```
### ▶️ Jalankan Laravel
```bash
php artisan serve
```
Akses di: [http://localhost:8000](http://localhost:8000)

---


### 📂 Struktur Directori
```
frontend-uas-[NIM]/
├── app/
│   └── Http/
│       ├── Controllers/
│       │   ├── Buku.php
│       │   └── Peminjaman.php
├── resources/
│   └── views/
│       ├── layout.blade.php
│       ├── buku/
│       │   ├── index.blade.php
│       │   ├── create.blade.php
│       │   └── edit.blade.php
│       └── peminjaman/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
└── routes/
    └── web.php
```


