<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('evento.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_users = Auth::id();
        $id_cliente = Auth::id();
        request()->validate(Evento::$rules); //validando info        
        $evento=Evento::create($request->all()); //ORM que crea con todos los datos
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */


    public function show(Evento $evento)
    {      
        $userId= Auth::id();              
        $evento= Evento::where('id_users',$userId)->get();
        return response()->json($evento);
    }


   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $evento= Evento::find($id);
        $evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');//doy nuevo formato al campo date
        $evento->end = Carbon::createFromFormat('Y-m-d H:i:s', $evento->end)->format('Y-m-d');
        
        return response()->json($evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
        request()->validate(Evento::$rules); //valida
        $evento->update($request->all()); //actualiza
        return response()->json($evento); //devuelve nuevo resultado
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $evento=Evento::find($id)->delete();
        return response()->json($evento);
    
    }

    // public function id_users(){
    //     $id_users =Auth::id(); 
    //     return view('home ', compact('id_users'));  

    // }
}
