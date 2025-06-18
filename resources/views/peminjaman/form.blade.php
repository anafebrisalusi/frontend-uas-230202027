<style>
    .form-label {
        font-weight: 600;
        color: #1e3a8a; /* Biru navy */
    }
    .form-control {
        background-color: #f0f6ff; /* Biru muda soft */
        border: 1px solid #c7ddef;
        color: #1e3a8a;
    }
    .form-control:focus {
        border-color: #3b82f6;
        box-shadow: 0 0 0 0.15rem rgba(59, 130, 246, 0.25);
    }
    select.form-control {
        background-color: #f0f6ff;
    }

    .btn-soft-blue {
    background-color: #3b82f6;       /* biru sedang */
    color: white;
    border: none;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }

  .btn-soft-blue:hover {
    background-color: #2563eb;       /* biru lebih gelap saat hover */
    box-shadow: 0 0 8px rgba(37, 99, 235, 0.4);
  }
</style>

<div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" name="id" value="{{ old('id', $peminjaman['id'] ?? '') }}" class="form-control" required {{ isset($peminjaman) ? 'readonly' : '' }}>
</div>

<div class="mb-3">
    <label class="form-label">Nama Peminjam</label>
    <input type="text" name="nama_peminjam" value="{{ old('nama_peminjam', $peminjaman['nama_peminjam'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Judul Buku</label>
    <input type="text" name="judul_buku" value="{{ old('judul_buku', $peminjaman['judul_buku'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Tanggal Pinjam</label>
    <input type="date" name="tanggal_pinjam" value="{{ old('tanggal_pinjam', $peminjaman['tanggal_pinjam'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Tanggal Kembali</label>
    <input type="date" name="tanggal_kembali" value="{{ old('tanggal_kembali', $peminjaman['tanggal_kembali'] ?? '') }}" class="form-control" required>
</div>

