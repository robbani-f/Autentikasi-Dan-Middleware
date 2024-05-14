<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pengguna Merchant</title>
    <!-- Tambahkan link CSS jika diperlukan -->
    <link rel="stylesheet" href="{{ asset('csscopy/merchant.css') }}">
</head>
<body>
    <nav>
        <!-- Tambahkan navigasi atau menu pengguna merchant -->
        <ul class="navbar-items">
            <li class="admin-item"><a href="{{ route('admin.index') }}">Halaman Pengguna Admin</a></li>
            <li class="product-item"><a href="{{ route('products.index') }}">List Produk</a></li>
            <li class="merchant-item"><a href="{{ route('merchant.index') }}">Halaman Pengguna Merchant</a></li>
        </ul>
    </nav>
    <main>
        <div class="content">
            <h1>Selamat Datang di Halaman Pengguna Merchant</h1>
            <!-- Tambahkan konten khusus pengguna merchant di sini -->
            <!-- Misalnya daftar produk yang dimiliki oleh merchant -->
        </div>
    </main>
    <footer>
        <!-- Tambahkan konten footer sesuai kebutuhan -->
    </footer>
</body>
</html>
