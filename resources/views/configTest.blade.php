<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Config</title>
</head>
<body>
    <form action="{{ route('config.store', $user) }}" method="POST">
        @csrf
        <x-errors />
        {{-- <input type="text" name="username" placeholder="{{ $user->username }}">  --}}
        <input type="email" name="email" placeholder="{{ $user->email }}"> 
        <input type="text" name="phone_number" placeholder="{{ $user->phone_number }}"> 
        <input type="password" name="oldPW" placeholder="Old"> 
        <input type="password" name="newPW" placeholder="New"> 
        <input type="password" name="newPW_confirmation" placeholder="New-Confirmation">

        <input type="submit" value="uwu">
    </form>
</body>
</html>