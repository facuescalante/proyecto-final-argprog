<?php

namespace App\Http\Controllers;

use App\Models\Automotore;
use App\Models\Titulare;
use Illuminate\Http\Request;

/**
 * Class AutomotoreController
 * @package App\Http\Controllers
 */
class AutomotoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automotores = Automotore::paginate();

        return view('automotore.index', compact('automotores'))
            ->with('i', (request()->input('page', 1) - 1) * $automotores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $automotore = new Automotore();
        $titulares = Titulare::all()->map(function ($titulare) {
            $titulare['nombre_completo'] = $titulare['apellido'] . ' ' . $titulare['nombre'];
            return $titulare;
        })->pluck('nombre_completo', 'id');
        return view('automotore.create', compact('automotore', 'titulares'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Automotore::$rules);

        $automotore = Automotore::create($request->all());

        return redirect()->route('automotores.index')
            ->with('success', 'Automotor creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $automotore = Automotore::find($id);

        return view('automotore.show', compact('automotore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $automotore = Automotore::find($id);
        $titulares = Titulare::all()->map(function ($titulare) {
            $titulare['nombre_completo'] = $titulare['apellido'] . ' ' . $titulare['nombre'];
            return $titulare;
        })->pluck('nombre_completo', 'id');
        return view('automotore.edit', compact('automotore', 'titulares'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Automotore $automotore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Automotore $automotore)
    {
        request()->validate(Automotore::$rules);

        $automotore->update($request->all());

        return redirect()->route('automotores.index')
            ->with('success', 'Automotor editado exitosamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $automotore = Automotore::find($id)->delete();

        return redirect()->route('automotores.index')
            ->with('success', 'Automotor eliminado exitosamente!');
    }
}
