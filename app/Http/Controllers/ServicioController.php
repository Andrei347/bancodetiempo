<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function getIndex($cat=null){
        if (isset($cat)){
            $arrayProducto=Servicio::Categorias($cat);
            return view('servicio.index',array('arrayProductos'=>$arrayProducto));
        }else{
            $arrayProducto=Servicio::all();
            return view('servicio.index',array('arrayProductos'=>$arrayProducto));}
    }
    public function getShow($id){
        $producto = Servicio::findOrFail($id);
        return view('servicio.show', array('producto'=>$producto),array('id'=>$id));
    }
    public function getCreate(){
        return view('servicio.create');
    }
    public function postCreate(Request $request)
    {
        Servicio::create([
            'nombre' =>$request->nombre,
            'precio' =>$request->precio,
            'categoria' =>$request->categoria,
            'imagen' =>$request->imagen,
            'descipcion' =>$request->descripcion
        ]);
        return redirect('/servicio');
    }
    public function getEdit($id)
    {
        $producto = Servicio::findOrFail($id);
        return view('servicio.edit', array('producto' => $producto));
    }
    public function putEdit(Request $request,$id)
    {
        $producto = Servicio::findOrFail($id);
        $producto->nombre=$request->nombre;
        $producto->precio=$request->precio;
        $producto->categoria=$request->categoria;
        $producto->imagen=$request->imagen;
        $producto->descripcion=$request->descripcion;
        $producto->save();
        return redirect('/servicio/show/'.$producto->id);
    }
    public function changePendiente($id)
    {
        $producto = Servicio::findOrFail($id);
        $producto->pendiente = !$producto->pendiente;
        $producto->save();
        return back();
    }
    public function getCategorias(){
        $arrayCategorias=Servicio::todaslasCategorias();
        return view('servicio.categoria', array('categoria' => $arrayCategorias));
    }
}
