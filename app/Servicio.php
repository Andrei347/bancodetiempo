<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{

    public static function todaslasCategorias(){
        $arrayCategorias=self::select('categoria')->distinct()->get();
        return $arrayCategorias;
    }
    public static function Categorias($cat=null){
        $arrayCategorias=self::where('categoria',$cat)->get();
        return $arrayCategorias;
    }
    public function categoriasVistas(){
        return $this->categoria;
    }
}
