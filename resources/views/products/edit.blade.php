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
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $product->nama) }}" required>
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $product->harga) }}" required>
                @error('harga')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok', $product->stok) }}" required>
                @error('stok')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="berat">Berat</label>
                <input type="number" class="form-control" id="berat" name="berat" value="{{ old('berat', $product->berat) }}" required>
                @error('berat')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*" onchange="showFileName(this)">
                <small id="gambarHelp" class="form-text text-muted">File gambar yang diizinkan: jpeg, jpg, png.</small>
                @error('gambar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gambarName">Nama Gambar: </label>
                <span id="gambarName"></span>
            </div>
            <div class="form-group">
                <label for="kondisi">Kondisi</label>
                <input type="text" class="form-control" id="kondisi" name="kondisi" value="{{ old('kondisi', $product->kondisi) }}" required>
                @error('kondisi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ old('deskripsi', $product->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Produk</button>
        </form>
    </div>
    <script>
        function showFileName(input) {
            var fileName = input.files[0].name;
            var gambarNameSpan = document.getElementById('gambarName');
            gambarNameSpan.textContent = fileName;
        }
    </script>
</body>
</html>
