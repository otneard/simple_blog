<div class="row">
    <h2>{{ $post->title }}</h2>
    <p><small>Author: {{ $post->email }}</small></p>
    {!! $post->content !!}
</div>
