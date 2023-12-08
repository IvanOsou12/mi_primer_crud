<?php

namespace App\Http\Controllers;

use App\Models\Sucursales;
use Illuminate\Http\Request;

class SucursalesController extends Controller
{

    public function informe()
    {
        $sucursales = Sucursales::with('mantenimientos')->get();

        return view('repoman', compact('sucursales'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                $sucursales = Sucursales::get();
        return view('sucursales', ['sucursales' => $sucursales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formusuc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sucursales = new Sucursales(); // Cambio aquí a 'Sucursales'
        $sucursales->tipo_de_sucursal = $request->input('tipo_de_sucursal');
        $sucursales->numero_sucursal = $request->input('numero_sucursal');
        $sucursales->empleados = $request->input('empleados');
        $sucursales->ubicacion = $request->input('ubicacion');

        $sucursales->save();

        return redirect()->route('sucursal');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sucursales $sucursales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sucursales $sucursales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sucursales $sucursales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        sucursales::destroy($id);
        return redirect()->route('sucursal');
    }
}
