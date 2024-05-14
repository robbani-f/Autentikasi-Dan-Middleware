<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="{{ asset('csscopy/edit.css') }}">

</head>
<body>
    <div class="container">
        <h1>Edit Produk</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $product->nama }}" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $product->harga }}" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{ $product->stok }}" required>
            </div>
            <div class="form-group">
                <label for="berat">Berat</label>
                <input type="number" class="form-control" id="berat" name="berat" value="{{ $product->berat }}" required>
            </div>
            <div class="form-group">
                <label for="gambar">URL Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar" value="{{ $product->gambar }}" required>
            </div>
            <div class="form-group">
                <label for="kondisi">Kondisi</label>
                <input type="text" class="form-control" id="kondisi" name="kondisi" value="{{ $product->kondisi }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $product->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Produk</button>
        </form>
    </div>
</body>
</html>
