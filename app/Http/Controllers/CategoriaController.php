<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\producto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $productos = producto::where('estado', true)->get();
        $categoria = DB::table('tablaproductos')
            ->join('tablacategoria', 'tablaproductos.id_cat', '=', 'tablacategoria.id')
            ->select('tablaproductos.id', 'tablaproductos.nombre', 'tablaproductos.fecha_vencimiento'
            , 'tablaproductos.precio', 'tablaproductos.cantidad', 'tablacategoria.descripcion')
            ->where('tablaproductos.estado', true)
            ->get();

        return view('Producto.producto', compact('productos','categoria'));

    }
}
