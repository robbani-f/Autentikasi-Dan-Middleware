<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('csscopy/login.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('register') }}"></a> <!-- Link Register yang sudah ada -->
        <button onclick="window.location.href='{{ route('register') }}'">Register</button> <!-- Tombol Register yang baru ditambahkan -->
    </div>
</body>
</html>
