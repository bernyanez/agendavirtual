<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\json;
use Illuminate\Support\Facades\DB;


class BuscaServicioController extends Controller
{
    //
    public function index(Request $request){
    $textoservicio = $request->get('textoservicio');
    $user = DB::table('users')
                ->where('servicio', 'LIKE', '%' . $textoservicio . '%')
                ->get();
    return view('user.index', compact('user'));
    }

<<<<<<< HEAD
}
=======
}
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
