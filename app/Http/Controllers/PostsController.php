<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostsController extends Controller
{

    public function _construct()
    {
        $this->middleware('auth');
    }
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
            'image'=> 'required|mimes:jpg,png,jpeg|max:5045',
            'post_content'=>'required',
        ]);
        //get the image from the form
        $fileNameWithTheExtension = request('image')->getClientOriginalName();


        //get the image from the form
        $fileName = pathinfo($fileNameWithTheExtension,PATHINFO_FILENAME);

        //get extension of the file
        $extension = request('image')->getClientOriginalExtension();

        //create a new for the file using the timestamp
        $newFileName = $fileName . '_' . time().'.' . $extension;

        //save the image onto a public directory into a separately folder
       // $path = request('image')->storeAs('public/images/posts_images',$newFileName);
        
        $request->image->move(public_path('images/posts_images'),$newFileName); 
       // dd($extension);d


    
      //  $user= auth()->user(); 
       // dd($user->id); $id = Auth::id();
       // $user= Auth::user();
        $post = new Post();

        $post->title =$request->input('title');
        $post->content = request('post_content');
        $post->image_url = $newFileName;
        $post->userId =  Auth::id() ;

       // $post->userId = $user->id;

        $post->save();
       return redirect ('/posts')->with('success','Post Successfully created !!!'); 
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
        //get the post with the id $post->idate
        $post = Post::find($post->id);

        //return view
        return view ('admin/posts/edit',['post'=>$post]);  
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
        //dd($post->id);

        $data = request()->validate([
            'title' => 'required|max:255',
            'image'=> 'required|mimes:jpg,png,jpeg|max:5045',
            'post_content'=>'required',
        ]);
        //get the image from the form
        $fileNameWithTheExtension = request('image')->getClientOriginalName();


        //get the image from the form
        $fileName = pathinfo($fileNameWithTheExtension,PATHINFO_FILENAME);

        //get extension of the file
        $extension = request('image')->getClientOriginalExtension();

        //create a new for the file using the timestamp
        $newFileName = $fileName . '_' . time().'.' . $extension;

       
        
        $request->image->move(public_path('images/posts_images'),$newFileName); 
      

    
      
        $post =  Post::findOrFail($post->id);

        $post->title =request('title');
        $post->content = request('post_content');
        $post->image_url = $newFileName;
       

       // $post->userId = $user->id;

        $post->save();
       return redirect ('/posts')->with('success','Post Successfully created !!!'); 
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request )
    {

       
        //find the post
        $post = Post::find($request->post_id);
        
        $oldImage = public_path() .'/images/posts_images/'.$post->image_url;

        //dd($oldImage);

        if(file_exists($oldImage)){
            //delete the image
            unlink($oldImage);

            //delete the post
            $post->delete();

            //redirect to posts
            return redirect('/posts');
        
    }
}
}