@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="jumbotron text-center">
            <h2>Robbert's search basics!</h2>
        </div>

        <div class="row">

            {{-- SEARCH INPUT --}}
            <div class="col-sm-6 col-sm-offset-3">
                <div id="imaginary_container">
                    {!! Form::open(array('route' => 'search', 'class' => 'form-horizontal')) !!}
                        <div class="input-group stylish-input-group">

                            <input type="text" class="form-control" name="searchtext" placeholder="Search">

                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>

            {{-- DATA OUTPUT --}}
            <div class="col-sm-6 col-sm-offset-3">
                @if(!empty($user))
                <h4>Zoekresultaten:</h4>
                    <ul class="list-group">
                        @foreach($user as $u)
                            <li class="list-group-item">
                                <p><b>Name:</b> {{ $u->name }}</p>
                            </li>
                            <li class="list-group-item">
                                <p><b>E-mail:</b> {{ $u->email }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

    </div>


@endsection


