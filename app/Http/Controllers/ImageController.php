<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import model Product

class ImageController extends Controller
{
    // Fungsi untuk menampilkan gambar
    public function show($id)
    {
        $product = Product::findOrFail($id);

        // Mengambil path gambar dari basis data
        $imagePath = $product->gambar;

        // Membaca file gambar dan mengirimkan respons dengan tipe konten yang sesuai
        $file = Storage::disk('public')->get($imagePath);
        $type = Storage::disk('public')->mimeType($imagePath);
        return response($file, 200)->header('Content-Type', $type);
    }
}
