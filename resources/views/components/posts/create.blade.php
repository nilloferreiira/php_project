<html>
<head>
    <title>Criar Post</title>
</head>
<body>
    <h1>Criar Post</h1>

        <div>
            {{ session('success') }}
        </div>

    <form action="{{ route('posts.create') }}" method="POST">
        @csrf

        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>

            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="body">Conteúdo</label>
            <textarea name="text" id="text" rows="5"></textarea>

            @error('body')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Criar Post</button>
    </form>
</body>
</html>
