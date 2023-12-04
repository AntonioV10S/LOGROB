<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{


    public function save(Request $request)
    {
        $producto = new producto();
        $producto->nombre = $request->nombre;
        $producto->fecha_vencimiento = $request->fecha_vencimiento;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad_stock;
        $producto->cat_id = $request->categoria;
        $producto->save();
        return back();

    }
    public function index()
    {
        $productos = producto::where('estado', true)->get();
        $categoria = DB::table('tablaproductos')
            ->join('tablacategoria', 'tablaproductos.cat_id', '=', 'tablacategoria.id')
            ->select('tablaproductos.id', 'tablaproductos.nombre', 'tablaproductos.fecha_vencimiento'
            , 'tablaproductos.precio', 'tablaproductos.cantidad', 'tablacategoria.descripcion')
            ->where('tablaproductos.estado', true)
            ->get();

        return view('Producto.producto', compact('productos','categoria'));

    }

}
