@extends('layouts.app')


@section('content')
<div class="container">
    <h3>Tambah Buku</h3>
    <form method="POST" action="/buku">
        @csrf
        @include('buku.form')
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection