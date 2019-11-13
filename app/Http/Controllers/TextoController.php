<?php

namespace App\Http\Controllers;

use App\Models\textos;
use Illuminate\Http\Request;

class TextoController extends Controller
{
    public function index()
    {
        $textos = textos::get();
        dd($textos  );
        return view('texto.index')
        ->with('textos', $textos);
    }

    public function store ()
    {

    }

    public function show ()
    {

    }

    public function update ()
    {

    }
}
