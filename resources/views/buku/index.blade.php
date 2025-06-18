@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Buku</h3>
    <a href="/buku/create" class="btn btn-primary mb-3">Tambah Buku</a>

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
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($buku as $buku)
            <tr>
                <td>{{ $buku['id'] }}</td>
                <td>{{ $buku['judul'] }}</td>
                <td>{{ $buku['pengarang'] }}</td>
                <td>{{ $buku['penerbit'] }}</td>
                <td>{{ $buku['tahun_terbit'] }}</td>
                <td>
                    <a href="/buku/{{ $buku['id'] }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/buku/{{ $buku['id'] }}" method="POST" style="display:inline">
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