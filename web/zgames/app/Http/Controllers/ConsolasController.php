<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsolasController extends Controller
{
    public function getMarcas(){
        //$marcas = ["Sony","Microsoft","Nintendo","Sega"];
        $marcas = array();
        $marcas[] = "Sony";
        $marcas[] = "Microsoft";
        $marcas[] = "Nnintendo";
        $marcas[] = "Sega";
        
        return $marcas;
    }
}