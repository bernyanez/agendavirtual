<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    static $rules=[
        'title'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required',
        'id_users'=>'required',
<<<<<<< HEAD
        'id_cliente'=>'required',
    ];

    protected $fillable=['title','descripcion','start','end','id_users','id_cliente'];
=======
    ];

    protected $fillable=['title','descripcion','start','end', 'id_users'];
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
}
