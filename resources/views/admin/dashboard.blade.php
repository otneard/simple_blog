@extends('admin.default')
@section('page-content')
    <div class="container">
        <h1>Dashboard</h1>
    </div>

    <div class="container">
        <h1>Posts</h1>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Author</th>
                <th>Title</th>
                <th>Content</th>
                <th>Delete</th>
            </tr>
        @foreach ($posts as $key => $post)
            <tr>
                <td>{{$key}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>
                    {!! Form::open(['route' => ['admin.post.delete', $post->id], 'method' => 'delete']) !!}                        
                        {!! Form::submit('DELETE', array('class'=>'btn btn-primary')) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </table>
    </div>
    <div class="container">
        <h1>Add post</h1>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(array('route' => 'admin.post.create', 'class' => 'form')) !!}

        <div class="form-group">
            {!! Form::label('Post title') !!}
            {!! Form::text('title', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Post title')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Post content') !!}
            {!! Form::textarea('content', null,
                array('required',
                      'class'=>'form-control',
                      'placeholder'=>'Post content')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit!',
              array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}

        <!-- Create Post Form -->
    </div>
@stop
