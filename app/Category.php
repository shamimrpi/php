<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

   
    public static function arrayForSelect(){
    	 $arr = [];
    	 $categories = Category::all();
    	 foreach ($categories as $key => $category) {
    	 	$arr[$category->id] = $category->name;
    	 }
    	 return $arr;
    }

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
   
}
