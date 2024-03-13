<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hello World</p>

    <div>
        <h2>Dashboard</h2>
        <h2>Welcome, {{ Session::get('username') }}</h2>
        <h3>Your Role is: {{ Session::get('userrole') }}</h3>
        <ul>
            <li><a href="{{ url('users/all') }}">All Users</a></li>
            <li><a href="{{ url('users/pending') }}">Pending Users</a></li>
        </ul>
    </div>
</body>
</html>
