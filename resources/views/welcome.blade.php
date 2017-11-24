@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    {!! Form::open(array('route' => 'logout')) !!}
                        <button class="btn btn-primary" type="submit">logout</button>
                    {{ Form::close() }}
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    FTS - FULL TEXT SEARCH
                </div>  

                <div class="links">
                    <a href="{{ route('dbtool') }}">Database Tool</a>
                </div>
            </div>
        </div>
@endsection