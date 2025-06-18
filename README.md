# 📚 SISTEM MANAJEMEN PERPUSTAKAAN

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
```
db_perpus_230202027
```
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
### 🔌 Postman
```
1. uas_buku
- GET :http://localhost:8080/buku
- POST : http://localhost:8080/buku
- PUT : http://localhost:8080/buku/{id}
- DELETE : http://localhost:8080/buku/{id}

2. uas_peminjaman
- GET :http://localhost:8080/peminjaman
- POST : http://localhost:8080/peminjaman
- PUT : http://localhost:8080/peminjaman/{id}
- DELETE : http://localhost:8080/peminjaman/{id}
```
## 🎨 B. Frontend
### 🛠️ Install Laravel
```
composer create-project laravel/laravel frontend-uas-230202027 "10.0"
cd frontend-uas-230202027
```
### Buat Controller
```
Buku
Peminjaman
```

### Tambahkan Route
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
```
php artisan serve
```

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


