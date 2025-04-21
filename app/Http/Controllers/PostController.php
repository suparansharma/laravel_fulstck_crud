<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }

    public function ourFileStore(Request $request){

        $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $request->image;
        $post->save();
        return redirect()->route('home')->with('success','Your Post has been created');

        // return redirect()->back();
        // return $request->all();

    }
}
