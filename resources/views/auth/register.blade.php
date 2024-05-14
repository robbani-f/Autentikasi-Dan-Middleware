<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('csscopy/register.css') }}">
    <style>
        
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="gender" placeholder="Gender" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="date" name="birth_date" placeholder="Birth Date" required>
            <input type="text" name="address" placeholder="Address" required>
            <select name="role" required>
                <option value="user">User</option>
                <option value="superadmin">Superadmin</option>
            </select>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
        <a href="{{ route('login') }}">Login</a>
    </div>
</body>
</html>
