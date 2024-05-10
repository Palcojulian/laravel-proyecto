<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaControlador extends Controller
{
    public function getName()
    {
        return response()->json([
            'success' => true,
            'message' => 'Hola mundo',
        ], 200);
    }
}
