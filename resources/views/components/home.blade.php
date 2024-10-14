<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home/index.css') }}">
</head>

<body class="container">
    <div class="header">
        <span>
            Bem vindo <span class="user-name">{{ $user->name }}</span>
        </span>
        <a href="{{ route('logout') }}" class="logout-button">Logout</a>
    </div>

    <a class="create-post" href="{{ route('posts.create.show') }}">Criar post</a>

    {{-- Posts  --}}
    <div style="display: flex; flex-direction: column; gap: 16px;">
        @if($user->posts)
        @foreach($user->posts as $post)
            <x-posts.post :post="$post"/>
        @endforeach
        @endif
    </div>
</body>

</html>
