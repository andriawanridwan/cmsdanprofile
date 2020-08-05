<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Upload;
class FrontController extends Controller
{
	public function index(){
		$post = Post::paginate(12);
		$upload = Upload::all();
		return view('index',compact('post','upload'));
	}
    public function blog(){
    	$post = Post::paginate(12);
    	return view('blog.blog',compact('post'));
    }

    public function read($slug){
    	$post = Post::where('slug',$slug)->first();
    	return view('blog.read',compact('post'));
    }

}
