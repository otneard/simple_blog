@extends('layout.default')
@section('content')
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#admin-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin panel</a>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="admin-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/') }}">Go to website</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('page-content')
@stop
