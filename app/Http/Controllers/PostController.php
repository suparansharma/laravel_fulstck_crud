<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }

    public function ourFileStore(Request $request){

        return $request->all();

    }
}
