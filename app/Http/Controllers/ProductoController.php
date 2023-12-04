<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = producto::where('estado', true);
        return view("Producto.producto", compact("productos"));
    }

    public function save(Request $request)
    {
        $producto = new producto();
        $producto->nombre = $request->nombre;
        $producto->fecha_vencimiento = $request->fecha_vencimiento;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad_stock;
        $producto->save();
        return back();

    }

}
