<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register.store') }}" method="post" class="session-form" novalidate>
        @csrf

        <input type="text" name="username" id="username" placeholder="username" value="{{ old('username') }}">
        <input type="text" name="name" id="name" placeholder="name" value="{{ old('name') }}">
        <input type="text" name="last_name" id="last_name" placeholder="last_name" value="{{ old('last_name') }}">
        <input type="email" name="email" id="email" placeholder="email" value="{{ old('email') }}">
        <input type="text" name="phone_number" id="phone_number" placeholder="phone_number" value="{{ old('phone_number') }}">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password_confirmation">
        <input type="radio" name="gender" id="F" value="F">
        <input type="radio" name="gender" id="M" value="M">
        <select name="type" id="type">
            <option value="" default></option>
            <option value="user">User</option>
            <option value="owner">Owner</option>
        </select>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>