<!-- resources/views/users/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>
<body>

    <h1>Users List</h1>

    <!-- عرض بيانات المستخدمين -->
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>

    <!-- نموذج إضافة مستخدم جديد -->
    <form action="/users" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter user name" required>
        <button type="submit">Add User</button>
    </form>

</body>
</html>
