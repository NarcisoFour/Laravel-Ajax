<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate();
        return view('producto', compact('productos'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Producto $producto)
    {
        //
    }
    public function edit(Producto $producto)
    {
        //
    }
    public function update(Request $request, Producto $producto)
    {
        //
    }
    /*
    public function destroy(Producto $producto)
    {
        //
    }*/
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {

            $producto = Producto::find($id);
            $producto->delete();

            $Productos_Total = Producto::all()->count();

            return response()->json([
                'total' => $Productos_Total,
                'mensaje' => $producto->nombre . ' fue eliminado correctamente'
            ]);
        }
    }
}
