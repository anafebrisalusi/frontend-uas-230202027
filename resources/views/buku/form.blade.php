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
    <input type="text" name="id" value="{{ old('id', $buku['id'] ?? '') }}" class="form-control" required {{ isset($buku) ? 'readonly' : '' }}>
</div>

<div class="mb-3">
    <label class="form-label">Judul</label>
    <input type="text" name="judul" value="{{ old('judul', $buku['judul'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Pengarang</label>
    <input type="text" name="pengarang" value="{{ old('pengarang', $buku['pengarang'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Penerbit</label>
    <input type="text" name="penerbit" value="{{ old('penerbit', $buku['penenrbit'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Tahun Terbit</label>
    <input type="text" name="tanggal_terbit" value="{{ old('tahun_terbit', $buku['tahun_terbit'] ?? '') }}" class="form-control" required>
</div>

