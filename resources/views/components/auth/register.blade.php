<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Registre-se</h1>
    <x-auth.register-form />
    <span>Já tem uma conta:?</span> <a href="{{ route('login') }}">login</a>
</body>
</html>