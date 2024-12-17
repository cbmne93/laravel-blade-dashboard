<?php

namespace App\Http\Controllers;

use App\Http\Requests\Genero\StoreRequest;
use App\Http\Requests\Genero\UpdateRequest;
use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{

    public function index()
    {
        $generos = Genero::paginate(8);

        return view('genero.index', compact('generos'));
    }


    public function create()
    {
        return view('genero.create');
    }


    public function store(StoreRequest $request)
    {
        Genero::create($request->validated());

        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Listo!',
            'text'  => 'Registro creado correctamente'
        ]);

        return to_route('genero.index');
    }

   
    public function show(Genero $genero)
    {

    }

   
    public function edit(Genero $genero)
    {
        return view('genero.edit', compact('genero'));

        
    }

  
    public function update(UpdateRequest $request, Genero $genero)
    {
        $genero->update($request->validated());

        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Listo!',
            'text'  => 'Registro actualizado correctamente'
        ]);

        return to_route('genero.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genero $genero)
    {
        //
    }
}
