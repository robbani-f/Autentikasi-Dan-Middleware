<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'harga' => ['required', 'numeric'],
            'stok' => ['required', 'numeric'],
            'berat' => ['required', 'numeric'],
            'gambar' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'], // Perbaiki aturan validasi untuk gambar
            'kondisi' => ['required'],
            'deskripsi' => ['required', 'max:2000'],
        ]);

        // Proses penyimpanan gambar
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('public/images'); // Simpan gambar di direktori public/images
            $validatedData['gambar'] = str_replace('public/', '', $imagePath); // Ubah path gambar agar sesuai dengan penyimpanan
        }

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'harga' => ['required', 'numeric'],
            'stok' => ['required', 'numeric'],
            'berat' => ['required', 'numeric'],
            'gambar' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2048'], // Perbaiki aturan validasi untuk gambar
            'kondisi' => ['required'],
            'deskripsi' => ['required', 'max:2000'],
        ]);

        // Proses penyimpanan gambar
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('public/images'); // Simpan gambar di direktori public/images
            $validatedData['gambar'] = str_replace('public/', '', $imagePath); // Ubah path gambar agar sesuai dengan penyimpanan
        }

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}

