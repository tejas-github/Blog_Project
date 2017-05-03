<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;


class PagesController extends controller
{

public function  getIndex()
 {

/*# process variable data or params
# talk to the model
# recieve data from the model
# compile that data from the model if needed
# pass that data to the correct view*/

$posts = Post::orderBy('created_at', 'desc') ->limit(4) ->get();

$sidebar = Post::orderBy('updated_at', 'desc') -> limit(6) -> get();

return view('pages.welcome') -> withPosts($posts) -> withSidebar($sidebar);
 }


public function getAbout()
 {

$first="Tejas";

$last="Rupade";

//$full=$first." ".$last;

$fullname=$first." ".$last;

$emailid="tejasrpd@gmail.com";

//return view('pages.about')->with("fullname",$full);
//return view('pages.about')->withFullname($fullname)->withEmailid($emailid);

$data=array("fullname" => "$fullname", "emailid" => "$emailid");

return view('pages.about')->withData($data);
 }


public function getContact()
 {

return view('pages.contact');
 }

 public function postcontact(Request $request)
  {
  	//$contact = 
  } 
}
