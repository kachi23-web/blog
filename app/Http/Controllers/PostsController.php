<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        //return $post;
        return view('admin.posts.index')
        ->with('posts',Post::orderBy('updated_at', 'DESC')->get()); 

         /* $post= Post::orderBy('id', 'desc')
        ->get();
         return view('admin.posts.index',['posts' => $post]); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //call the view admin.posts.create
        return view('admin.posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
         //validate the field
        $data = request()->validate([
            'title' => 'required|unique:posts|max:255',
            'image'=> 'required|image',
            'post_content'=>'required',
        ]);
        
         $user= auth()->user(); 
          //$user = new User();

        //dd($user->id);
        
        $post = new Post();

        $post->title =$request->input('title');
        $post->content = request('post_content');
        $post->image_url = 'image_test';
        $post->userId = $user->id;

        $post->save();
       return redirect ('admin/posts'); 
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //find the post
        $post = Post::find($request->post);

        $oldImage = public_path() .'/storage/images/posts_images/'.$post->image_url;

        if(file_exists($old)){
            //delete the image
            unlink($oldImage);

            //delete the post
            $post->delete();

            //redirect to posts
            return redirect('/posts');
        
    }
}
}