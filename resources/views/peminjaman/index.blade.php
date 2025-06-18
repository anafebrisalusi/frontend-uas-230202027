@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Peminjaman</h3>
    <a href="/peminjaman/create" class="btn btn-primary mb-3">Tambah Peminjaman</a>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Pesan error --}}
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($peminjaman as $peminjaman)
            <tr>
                <td>{{ $peminjaman['id'] }}</td>
                <td>{{ $peminjaman['nama_peminjam'] }}</td>
                <td>{{ $peminjaman['judul_buku'] }}</td>   
                <td>{{ $peminjaman['tanggal_pinjam'] }}</td>
                <td>{{ $peminjaman['tanggal_kembali'] }}</td>
                <td>
                    <a href="/peminjaman/{{ $peminjaman['id'] }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/peminjaman/{{ $peminjaman['id'] }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center text-muted">Data Buku tidak tersedia.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection