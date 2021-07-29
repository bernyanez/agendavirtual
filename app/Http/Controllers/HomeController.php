<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $userId= Auth::id();
        // //var_dump($userId);
        // echo "<script> alert('".$userId."'); </script>";
        // exit;
        return view('home');
    }

    public function editar(User $user)
    {
        return view('user.editar',compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->servicio = $request->servicio;
        $user->direccion = $request->direccion;
        $user->descripcion = $request->descripcion;
        $user->telefono = $request->telefono;

        $user->save();

        return view('home');
    }
}
