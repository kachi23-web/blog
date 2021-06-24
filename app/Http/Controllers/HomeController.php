<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
     {
    //     $this->middleware('auth');
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
       //return view('welcome');
        $posts = Post::orderBy('id','desc')->simplePaginate(3);
     
        return view('welcome',['posts'=> $posts]);
    }
    // show the post identified by the $id
     public function show($id){

        //Find the post with the id = $id
        $post = Post::find($id);

        return view ('/show',['post'=>$post]);

     }
}
