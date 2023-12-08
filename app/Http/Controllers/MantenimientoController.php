<?php

namespace App\Http\Controllers;
use App\Models\mantenimiento;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mant = mantenimiento::get();
        return view('mant', ['mant' => $mant]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formumant');    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mant = new mantenimiento();
        $mant->tipo_de_mantenimiento =$request->input('tipo_de_mantenimiento');
        $mant->numero_de_serie =$request->input('numero_de_serie');
        $mant->estado =$request->input('estado');
        $mant->tiempo_estimado =$request->input('tiempo_estimado');

        $mant->save();

        return redirect()->route('mant');    }

    /**
     * Display the specified resource.
     */
    public function show(mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        mantenimiento::destroy($id);
        return redirect()->route('mant');
    }
}
