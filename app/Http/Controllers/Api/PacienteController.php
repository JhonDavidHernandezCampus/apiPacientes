<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarPacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarPacienteRequest;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Paciente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarPacienteRequest $request)
    {
        Paciente::create($request->all());
        return response()->json([
            'res'=>true,
            "message"=>"Guardado correctamente"
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $id)
    {
        return response()->json([
            'res' => true,
            'paciente' => $id
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarPacienteRequest $request, Paciente $id)
    {
        $id->update($request->all());
        return response()->json([
            'res'=>true,
            'mensage'=> "Paciente actualiza correctamente"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
