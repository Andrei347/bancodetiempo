@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGvo_pIfo0SC4Dgiumsz4GKtLL3WZoiLwKayO5QpyMrRhyzjPkyA" style="height:200px"/>
        </div>
        <div class="col-sm-8">
            <h1>{{$producto->nombre}}</h1>
            <h2>{{$producto->categoria}}</h2>
            <p>Precio: {{$producto->precio}}</p>
            <p>Detalles: {{$producto->descripcion}}</p>
            <p><strong>Estado: </strong>
                @if($producto->pendiente)
                    Bloqueado
                    @php
                        $class = "btn btn-danger";
                        $texto = "Devolver";
                    @endphp
                @else
                    Activo
                    @php
                        $class = "btn btn-success";
                        $texto = "Comprar";
                    @endphp
                @endif
            </p>

            <form action="{{ url('/servicio/changePendiente/' . $producto->id) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <input type="submit"  class="{{$class}}" value="{{$texto}}" />

            </form>
            <a class="btn btn-success" href="{{ action('ServicioController@getIndex') }}">Volver al listado</a>
            <a class="btn btn-warning" href="{{ url('/servicio/edit/'. $producto->id ) }}">Editar</a>

        </div>
    </div>

@stop
