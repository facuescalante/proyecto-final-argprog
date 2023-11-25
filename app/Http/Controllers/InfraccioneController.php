<?php

namespace App\Http\Controllers;

use App\Models\Automotore;
use App\Models\Infraccione;
use Illuminate\Http\Request;
use App\Models\Titulare;

/**
 * Class InfraccioneController
 * @package App\Http\Controllers
 */
class InfraccioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infracciones = Infraccione::paginate();

        return view('infraccione.index', compact('infracciones'))
            ->with('i', (request()->input('page', 1) - 1) * $infracciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $infraccione = new Infraccione();
        $automotores = Automotore::all()->map(function ($automotore) {
            $automotore['datos'] = $automotore['marca'] . ' ' . $automotore['patente'];
            return $automotore;
        })->pluck('datos', 'id');
        return view('infraccione.create', compact('infraccione', 'automotores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Infraccione::$rules);

        $infraccione = Infraccione::create($request->all());

        return redirect()->route('infracciones.index')
            ->with('success', 'Infraccion creada exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infraccione = Infraccione::find($id);
        
        return view('infraccione.show', compact('infraccione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infraccione = Infraccione::find($id);
        $automotores = Automotore::all()->map(function ($automotore) {
            $automotore['datos'] = $automotore['marca'] . ' ' . $automotore['patente'];
            return $automotore;
        })->pluck('datos', 'id');       

        return view('infraccione.edit', compact('infraccione', 'automotores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Infraccione $infraccione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infraccione $infraccione)
    {
        request()->validate(Infraccione::$rules);

        $infraccione->update($request->all());
        

        return redirect()->route('infracciones.index')
            ->with('success', 'Infraccion editada exitosamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $infraccione = Infraccione::find($id)->delete();

        return redirect()->route('infracciones.index')
            ->with('success', 'Infraccion eliminada exitosamente!');
    }
}
