{{-- User posts --}}

<div class="post">
    <div class="post-header">
        <span class="post-author">Publicado por: {{ $post->user->name }}</span>
        <span class="post-date">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i') }}</span>
    </div>
    <h2 class="post-title">{{ $post->title }}</h2>
    <p class="post-text">{{ $post->text }}</p>
    <div class="post-footer">
        <span class="post-update">Última atualização: {{ \Carbon\Carbon::parse($post->updated_at)->format('d/m/Y H:i') }}</span>
    </div>
</div>
