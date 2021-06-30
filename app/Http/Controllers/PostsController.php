<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; //omogućavamo korišćenje Post modela.
use DB; //preko DB klase izvlačimo podatke iz baze

class PostsController extends Controller
{


        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
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
        //$posts = Post::orderBy('title', 'desc')->get(); //razvrstavanje postova prema naslovu 
        //$posts = Post::all(); //uzimanje svega iz modela - baze
        $posts = DB::select('SELECT * FROM posts');
        return view('posts.index') ->  with('posts', $posts); //u index.blade.php izlistamo sve postove
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required', 
            'body' => 'required'
        ]);

        $post = new Post;
        $post -> title = $request -> input('title'); //dodavanje novog posta - naslov
        $post -> body = $request -> input('body'); //dodavanje novog posta - tekst
        $post -> user_id = auth()->user()->id; //naknadno dodato - povezivanje usera (id usera) sa objavom - kako bi se znalo koji user je objavio koju objavu
        $post -> save(); //dodavanje novog posta - čuvanje

        return redirect('/posts') -> with('success', 'New Post created!'); //Nakon čuvanja nove objave, redirect na sve objave
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required', 
            'body' => 'required'
        ]);

        $post = Post::find($id); //nađi post preko id
        $post -> title = $request -> input('title'); //dodavanje novog posta - naslov
        $post -> body = $request -> input('body'); //dodavanje novog posta - tekst
        $post -> save(); //dodavanje novog posta - čuvanje

        return redirect('/posts') -> with('success', 'Post updated!'); //Nakon čuvanja nove objave, redirect na sve objave
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post -> delete();
        
        return redirect('/posts') -> with('success', 'Post deleted!');
    }
}
