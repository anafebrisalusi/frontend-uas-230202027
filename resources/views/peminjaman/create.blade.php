@extends('layouts.app')


@section('content')
<div class="container">
    <h3>Tambah Peminjam</h3>
    <form method="POST" action="/peminjaman">
        @csrf
        @include('peminjaman.form')
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection