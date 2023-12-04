<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Support\Facades\DB;

use App\Models\producto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function registrar(Request $request)
    {
        $cat = new categoria();
        $cat->descripcion = $request->descripcion;
        $cat->save();
        return back();
    }


    public function show()
    {
        return view('Categoria.categoria');
    }
}
