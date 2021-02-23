<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CMenu extends Controller
{
    
    public function convocatoria(){
        return view('convocatoria2020');
    }
    public function etapa1(){
        return view('etapa1');
    }
    public function etapa2(){
        return view('etapa2');
    }
    public function etapa3(){
        return view('etapa3');
    }
    public function contacto(){
        return view('contacto');
    }
    
}
