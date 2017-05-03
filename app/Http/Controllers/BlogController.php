<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class BlogController extends Controller
{
    
	public function getIndex(){
		$posts = Post::paginate(10);

		return view('blog.index') -> withPosts($posts);
	}

    public function getSingle($slug){
    	//fetch from the DB based on the slug
    	$post = post::where('slug', '=', $slug) -> first(); //first:stops the search at the first match found. The data can be retrieved directly this way instead of using get() at the end & then retrieving it using a loop because it is inside a collectioon/group of objects.

    	//return the view & pass in the post object
    	return view('blog.Single') -> withPost($post);
    }


}
