@extends('posts.main_layout')
@section('body_section')
  <div class="content-wrapper">
<div class="container">
   @if(session('message'))
    
                    <div class="alert alert-info" role="alert">
                    {{session('message')}}
                    </div>
                        
                    @endif
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Post table</h3>
              <a class="btn btn-info text-right" href="{{route('posts.create')}}">New Post</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Tilte</th>
                  <th>Description</th>
                  <th>Picture(s)</th>
                  <th>Category</th>
                  <th>Created By</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($posts as $key=> $post)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td class="text-center">
                      
                   <img src="{{asset('images/'.$post->image)}}" height="50" width="50" class="shadow-xl">

                    </td>
                    <td>{{$post->category->name}}</td>
                    <td width="150">{{optional($post->user)->name}}</td>
                    <td width="150">
                      <a class="btn btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="{{route('posts.edit',$post->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                      <a class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
@stop