<!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
</head>
<body>
    <h2>User Management</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Birth Date</th>
            <th>Address</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->birth_date }}</td>
            <td>{{ $user->address }}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('products') }}">Go to Products</a><br>
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
