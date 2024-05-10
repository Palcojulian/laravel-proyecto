<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Categoria;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoriaFormRequest;
use DB;




class CategoriaController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $categorias = DB::table('categoria_prueba') -> where('nombre','LIKE','%'.$query.'%') 
            -> where('condicion','=','1')
            -> orderBy('id_categoria', 'desc')
            -> paginate(7);
        }
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edite()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}

