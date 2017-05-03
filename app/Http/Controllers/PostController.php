<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    // Second parameter is an array which can be used to give access of certain functions in this controller to the non logged-in users.
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
         //echo get_class($this);
        $posts = Post::orderBy('id', 'desc') -> paginate(2);
        return view('posts.index') -> withPosts($posts);
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
        // Validate the data
        
            $this -> validate($request, array('title' => 'required|max:255','slug' => 'required|alpha_dash|max:255|min:5|unique:posts,slug', 'body' => 'required'));
        // Store data in the database
            $post = new Post;

            $post -> title = $request -> title;
            $post -> slug = $request -> slug;
            $post -> body = $request -> body;


            $post -> save();

            Session::flash('success','The blog post was saved successfully!');
        // Redirect to another page
            return redirect() -> route('posts.show', $post -> id);
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
        return view('posts.show') -> withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the DB & save as a variable
        $post = Post::find($id);
        //return the view with the above variable created.
        return view('posts.edit') -> withPost($post);
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
        // Validate the data
        $post = Post::find($id);

            if ($request->input('slug') == $post->slug) {
                 $this -> validate($request, array('title' => 'required|max:255', 'body' => 'required'));
            }

            else {

            $this -> validate($request, array('title' => 'required|max:255','slug' => 'required|alpha_dash|max:255|min:5|unique:posts,slug', 'body' => 'required'));
            }

        // Save the data to the DB
            //$post = Post::find($id);

            $post -> title = $request -> input('title');

            $post -> slug = $request -> input('slug');

            $post -> body = $request -> input('body');

            $post -> save();

        // set flash data with success message
            Session::flash('success','The blog post was edited and saved successfully!');


        // redirect with flash data to posts.show
            return redirect() -> route('posts.show', $post -> id);
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

        Session::flash('success','The blog post was deleted successfully!');

        return redirect() -> route('posts.index');
    }
}
