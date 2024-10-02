<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Series extends Controller
{
    public function index(Request $request){
        
       
        $series = [
            'Homem de Ferro 2',
            'Meu Malvado Favorito 2',
            'Grey\'s Anatomy'
        ];


        return view('listar_series')->with('series', $series);
    }
}
