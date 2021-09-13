<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $nombre = 'Jorge';
        
        return view('index')
        ->with('nombre', $nombre);
    }

    public function detalle()
    {
        $nombre = 'Kete-im';
        $apellido = 'Porta';
        $tel = '4773577669';
        $mail = 'sexyvaguito@gmail.com';

        return view('detalle')
        ->with('nombre', $nombre)
        ->with('apellido', $apellido)
        ->with('tel', $tel)
        ->with('mail', $mail);
    }
}
