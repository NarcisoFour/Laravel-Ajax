<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate();
        return view('home', compact('productos'));
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
    public function destroy(Producto $producto)
    {
        //
    }
}
