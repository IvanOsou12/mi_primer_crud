<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {


        $Clientes = clientes::get();
        return view('clientes', ['clientes' => $Clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formuclie');    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new clientes();
        $clientes->nombre =$request->input('nombre');
        $clientes->curp =$request->input('curp');
        $clientes->numero =$request->input('numero');
        $clientes->direccion =$request->input('direccion');
        $clientes->localidad =$request->input('localidad');

        $clientes->save();

        return redirect()->route('clientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clientes = clientes::findOrFail($id);
        return view('clientes', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $clientes = clientes::findOrFail($id);
        $clientes->nombre =$request->input('nombre');
        $clientes->curp =$request->input('curp');
        $clientes->numero =$request->input('numero');
        $clientes->direccion =$request->input('direccion');
        $clientes->localidad =$request->input('localidad');
        $clientes->save();
        return redirect()->route('clientes');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        clientes::destroy($id);
        return redirect()->route('clientes');
    }
}
