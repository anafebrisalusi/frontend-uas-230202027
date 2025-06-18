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


