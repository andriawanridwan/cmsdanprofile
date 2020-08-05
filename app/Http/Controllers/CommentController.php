<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
class CommentController extends Controller
{
    public function addComment(Request $request, Post $post){
    	$comment = new Comment;
    	$comment->name = $request->name;
    	$comment->comment = $request->comment;
    	$post->comments()->save($comment);
    	return back();
    }

    public function addReply(Request $request, Comment $comment){
    	$reply = new Comment;
    	$reply->name = $request->name;
    	$reply->comment = $request->comment;
    	$comment->comments()->save($reply);
    	return back();
    }
}
