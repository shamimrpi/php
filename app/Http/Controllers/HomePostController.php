<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\Category;


class HomePostController extends Controller
{
    public function index(){
    	
    	/*$this->data['posts'] = DB::table('posts')->paginate(1);*/
    	$this->data['categories'] = Category::all();
    	$this->data['posts'] =Post::paginate(3);
    	return view('web.index',$this->data);
    }
    public function show($id){
    	$this->data['categories'] = Category::all();
    	$this->data['post'] = Post::find($id);
    	return view('web.single',$this->data);
    }
}
