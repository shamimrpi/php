<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;


class CommentController extends Controller
{
    public function store(Request $request, $post){
    	$this->validate($request,[
    		'comment' => 'required'
    	]);
    	$comment = new Comment();
    	$comment->user_id = Auth::id();
    	$comment->post_id = $post;
    	$comment->comment = $request->comment;
    	$comment->save();
    	/*Toastr::success('comment successfully publish','success');*/
    	return redirect()->back();
    }
}
