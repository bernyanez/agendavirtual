<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class EventoProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("evento.calendarioprofesional");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        {
            $id_users = $request ('id_user','1');
            request()->validate(Evento::$rules); //validando info        
            $evento=Evento::create($request->all()); //ORM que crea con todos los datos
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response $evento
     */
    public function show()
    {
         $data['eventos']=evento::all();  
         return response()-> json($data['eventos']);  
         
       
        // $evento= Evento::where('id_users',"1")->get();
        // return response()->json($evento);
        // //return view('calendarioprofesional', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
