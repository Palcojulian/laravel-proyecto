<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
    protected $table = 'categoria_prueba';
    protected $primaryKey = 'id_Categoria';
    
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'condicion',
    ];

    protected $guarded = [

    ];
}
