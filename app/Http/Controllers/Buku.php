<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Buku extends Controller
{
    protected $apiUrl = 'http://localhost:8080/buku';

    public function index()
    {
        $response = Http::get($this->apiUrl);

        if ($response->failed()) {
            return back()->with('error', 'Gagal mengambil data dari API.');
        }

        $buku = $response->json();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
        ]);

        $response = Http::post($this->apiUrl, $request->all());

        if ($response->failed()) {
            return back()->with('error', 'Gagal menambahkan data ke API.');
        }

        return redirect('/buku')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $response = Http::get("{$this->apiUrl}/$id");

        if ($response->failed() || !$response->json()) {
            return back()->with('error', 'Data buku tidak ditemukan.');
        }

        $buku = $response->json();
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $buku)
    {
        $response = Http::put("{$this->apiUrl}/$buku", $request->all());

        if ($response->failed()) {
            return back()->with('error', 'Gagal memperbarui data.');
        }

        return redirect('/buku')->with('success', 'Data Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $response = Http::delete("{$this->apiUrl}/$id");

        if ($response->failed()) {
            return back()->with('error', 'Gagal menghapus data.');
        }

        return back()->with('success', 'Data buku berhasil dihapus.');
    }
}