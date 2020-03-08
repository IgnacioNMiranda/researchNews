<?php

namespace App\Http\Controllers\Researcher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Researcher;

class ResearcherController extends Controller
{

    /* Redirige a iniciar sesion si se intenta ingresar
    a la url sin haber iniciado sesion
    */
    public function __construct()
    {
        $this->middleware('auth');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('researcher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Researcher::create($request->all());

        return redirect()->route('researcher.edit', $researcher->id)->with('info','Investigador creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $researcher = Researcher::find($id);

        return view('researcher.show',compact('researcher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $researcher = Researcher::find($id);

        return view('researcher.edit', compact('researcher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validar
        $researcher = Researcher::find($id);

        $researcher->fill($request->all())->save();

        return redirect()->route('researcher.edit', $researcher->id)->with('info','Investigador actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
