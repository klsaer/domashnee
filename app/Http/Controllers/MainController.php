<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex(){
        return view('home');
}

public function showArray(){
    $array = [
        ['id' => 1, 'title' => 'чай', 'price' => 100, 'path' => 'img/1.png'],
        ['id' => 2, 'title' => 'кофе', 'price' => 200, 'path' => 'img/1.png'],
        ];
        return view('array', compact('array'));
}

}

