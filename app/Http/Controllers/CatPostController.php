<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class CatPostController extends Controller
{
    public function index($category_id)
    {
    	$this->data['posts'] = Post::where('category_id',$category_id);
    	return view('web.catpost',$this->data);
    }
}
