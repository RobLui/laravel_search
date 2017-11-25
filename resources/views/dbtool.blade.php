@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="jumbotron text-center">
            <img class="logo-class" src="{{asset('/images/roblui')}}" alt="logo">
        </div>

        <div class="row">
            <div class="col-md-12">
                {{-- SEARCH INPUT --}}
                <div class="col-sm-6 col-sm-offset-3">
                    <div id="imaginary_container">
                        {!! Form::open(array('route' => 'search', 'class' => 'form-horizontal')) !!}
                            <div class="input-group stylish-input-group">

                                <input type="text" class="form-control" name="searchtext" placeholder="Search">

                                <span class="input-group-addon">
                                    <button type="submit">
                                        <spans class="glyphicon glyphicon-search"></spans>
                                    </button>
                                </span>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

        <hr>

        <div class="col-md-12">
            {{-- DATA OUTPUT --}}
            <div class="col-sm-6 col-sm-offset-3">
                @if(!empty($user))
                    @if(count($user) > 0)
                        <h4>Zoekresultaten User:</h4>
                        <ul class="list-group">
                            @foreach($user as $u)
                                <li class="list-group-item">
                                    <p><b>Name:</b> {{ $u->name }}</p>
                                </li>
                                <li class="list-group-item">
                                    <p><b>E-mail:</b> {{ $u->email }}</p>
                                </li>
                                {{--{{ $u }}--}}
                            @endforeach
                        </ul>
                    @else
                        <h4>There was nothing found for your search terms in table: Users</h4>
                    @endif

                @endif
            </div>

            {{-- DATA OUTPUT --}}
            <div class="col-sm-6 col-sm-offset-3">
                @if(!empty($test))
                    @if(count($test) > 0)
                        <h4>Zoekresultaten Test:</h4>
                        <ul class="list-group">
                            @foreach($test as $t)
                                <li class="list-group-item">
                                    <p><b>Titel:</b> {{ $t->title }}</p>
                                </li>
                                <li class="list-group-item">
                                    <p><b>Tekst:</b> {{ $t->text }}</p>
                                </li>
                                <li class="list-group-item">
                                    <p><b>Tag:</b> {{ $t->tag }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <h4>There was nothing found for your search terms in table: Tests</h4>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>

@endsection


