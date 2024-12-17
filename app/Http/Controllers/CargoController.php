<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cargo\StoreRequest;
use App\Http\Requests\Cargo\UpdateRequest;
use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    
    public function index()
    {

        $cargos = Cargo::orderBy('state')->paginate();
        return view('cargo.index', compact('cargos'));
    }

   
    public function create()
    {
        return view('cargo.create');
    }

  
    public function store(StoreRequest $request)
    {
        Cargo::create($request->validated());

        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Listo!',
            'text'  => 'Registro creado correctamente'
        ]);

        return to_route('cargo.index');
    }

  
    public function show(Cargo $cargo)
    {
        //
    }

  
    public function edit(Cargo $cargo)
    {
        return view('cargo.edit', compact('cargo'));
    }

    public function update(UpdateRequest $request, Cargo $cargo)
    {
        $cargo->update($request->validated());

        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Listo!',
            'text'  => 'Registro actualizado correctamente'
        ]);

        return to_route('cargo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cargo $cargo)
    {
        //
    }
}
