<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscriptioncontroller extends Controller
{
    public function inscription(Request $request){
        return view('inscription');
}
}