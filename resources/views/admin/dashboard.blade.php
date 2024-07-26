<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <p>Welcome to the admin dashboard.</p>
    <ul>
        <li><a href="{{ route('admin.orders.index') }}">View Orders</a></li>
        <!-- Add other links as needed -->
    </ul>
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
