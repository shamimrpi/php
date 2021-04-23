<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Header;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $this->data['posts'] = Post::all();
        $this->data['user_id'] = Auth::id();
        return view('posts.posts',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['categories']  = Category::arrayForSelect();
        return view('posts.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // method we can use it
        // guessExtension()
        //getMimeType()
        // store();
        //asStore();
        //storePublicly();
        //move()
        //getClientOriginalName()
        //getClientMimeType()


        
        
        $request->validate([
            'title' => 'required',
            'user_id' => 'nullable',
            'description' =>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = time().'-'.$request->name. '.' . $request->image->getClientOriginalName();

        $test = $request->image->move(public_path('images'),$newImageName);

        $post = Post::create([
            'title'=>$request->input('title'),
          
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image' => $newImageName,
            'user_id' => Auth::id()

        ]);

         if($post == true){
            Session::flash('message','Your post created successfully');
        }
        return redirect()->to('admin/posts');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['post'] = Post::find($id);
        return view('posts.edit',$this->data);
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
        $test = $request->file('image')->getClientMimeType();
        
        $request->validate([
            'title' => 'required',
            'user_id' => 'nullable',
            'description' =>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);


        $data = $request->all();
        $post = Post::find($id);
        $post->title = $data['title'];
        $post->user_id = $data['user_id'];
        $post->description = $data['description'];
        
        $newImageName = time().'-'.$file->getClientOriginalName();

        $test = $request->image->move(public_path('images'),$newImageName);
        $post->save();
         if( $post->save()){
            Session::flash('message','Your Post updated Successfully');
        }
        return redirect()->to('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
