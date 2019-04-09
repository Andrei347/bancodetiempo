@extends('layouts.master')

@section('content')
    <div class="row">
        @foreach( $categoria as $cat )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href="{{ url('servicio/' . $cat->categoriasVistas()) }}">
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$cat->categoriasVistas()}}
                    </h4>
                </a>
            </div>
        @endforeach

    </div>

@stop
