@extends('layout.default')
@section('content')
    <nav class="navbar navbar-inverse custom-navbar">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#admin-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/') }}">Simple Blog</a>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="admin-navbar">
                <ul class="nav navbar-nav">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @elseif (Auth::user()->hasRole('admin'))
                        <li><a href="{{ url('/admin') }}">Admin panel</a></li>
                    @endif
                    @if (Auth::check())
                        <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('page-content')
@stop
