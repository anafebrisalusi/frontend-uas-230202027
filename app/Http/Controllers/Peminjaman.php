<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Peminjaman extends Controller
{
    protected $apiUrl = 'http://localhost:8080/peminjaman';

    public function index()
    {
        $response = Http::get($this->apiUrl);

        if ($response->failed()) {
            return back()->with('error', 'Gagal mengambil data dari API.');
        }

        $peminjaman = $response->json();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        return view('peminjaman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_peminjam' => 'required',
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
        ]);

        $response = Http::post($this->apiUrl, $request->all());

        if ($response->failed()) {
            return back()->with('error', 'Gagal menambahkan data ke API.');
        }

        return redirect('/peminjaman')->with('success', 'Data peminjam berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $response = Http::get("{$this->apiUrl}/$id");

        if ($response->failed() || !$response->json()) {
            return back()->with('error', 'Data peminjam tidak ditemukan.');
        }

        $peminjam = $response->json();
        return view('peminjaman.edit', compact('peminjaman'));
    }

    public function update(Request $request, $peminjaman)
    {
        $response = Http::put("{$this->apiUrl}/$peminjaman", $request->all());

        if ($response->failed()) {
            return back()->with('error', 'Gagal memperbarui data.');
        }

        return redirect('/peminjaman')->with('success', 'Data peminjaman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $response = Http::delete("{$this->apiUrl}/$id");

        if ($response->failed()) {
            return back()->with('error', 'Gagal menghapus data.');
        }

        return back()->with('success', 'Data peminjaman berhasil dihapus.');
    }
}