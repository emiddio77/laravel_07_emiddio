<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function create(){
        return view ('create');
    }

    public function store(Request $request){
        Movie::create(['title'=>$request->title]);

    }
}
