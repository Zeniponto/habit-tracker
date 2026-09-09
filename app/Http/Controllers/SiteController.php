<?php

namespace App\Http\Controllers;



class SiteController extends Controller
{
    public function index()
    {
        $name = 'Zeni';
        $habits = ['ler', 'correr', 'jogar videogame', 'tocar guitarra'];
        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
