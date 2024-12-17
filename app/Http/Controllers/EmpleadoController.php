<?php

namespace App\Http\Controllers;

use App\Http\Requests\Empleado\StoreRequest;
use App\Models\Cargo;
use App\Models\Genero;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::paginate();
        return view('empleado.index', compact('empleados'));
    }


    public function create()
    {
        $generos = Genero::all();
        $cargos = Cargo::all();
        return view('empleado.create', compact('generos', 'cargos'));
    }


    public function store(StoreRequest $request)
    {
        Empleado::create($request->validated());
        
        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Listo!',
            'text'  => 'Registro actualizado correctamente'
        ]);

        return to_route('empleado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
