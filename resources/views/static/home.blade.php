@extends('layout.app')
@section('page-content')
<div class="container">
    <h1>Welcome to Simple Blog</h1>
    <p>
        This is just a simple Laravel sample app. Manage the posts from the admin panel.
    </p>
</div>
<div class="container">
    @each('partial.post', $posts, 'post', 'partial.empty-post')
</div>
@stop
