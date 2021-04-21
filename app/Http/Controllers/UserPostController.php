<?php

namespace App\Http\Controllers;
use App\Post; 
use App\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserPostController extends Controller
{
    public function index(){
       
    	$this->data['posts'] = Post::all();
        $this->data['headers'] = Header::all();
    	return view('website.index',$this->data);
    }

     public function category(){
     	$this->data['posts'] = DB::table('posts')->paginate(15);
    	$this->data['headers'] = Header::all();
    	return view('website.category',$this->data);
    }

    public function show($id){
    	$this->data['post'] = Post::findOrfail($id);
        $this->data['headers'] = Header::all();
    	return view('website.post',$this->data);
    }
}
