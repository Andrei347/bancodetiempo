@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Editar Servicio
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('servicio/edit/'.$producto->id) }}" method="POST">

                        {{method_field('PUT')}}
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nomnre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$producto->nombre}}">
                        </div>

                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number"  name="precio" id="precio" value="{{$producto->precio}}">
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <input type="text" name="categoria" id="categoria" value="{{$producto->categoria}}">
                        </div>

                        <div class="form-group">
                            <label for="img">Imagen</label>
                            <input type="text" name="imagen" id="img" value="{{$producto->imagen}}">
                        </div>

                        <div class="form-group">
                            <label for="desc">Descripcion</label>
                            <textarea name="descripcion" id="desc" class="form-control" rows="5">{{$producto->descripcion}}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar Servicio
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@stop
