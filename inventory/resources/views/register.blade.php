<!DOCTYPE html>
<html>
<head>
    <title>User/Admin Register</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>

        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="gudang">Gudang</option>
        </select><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
