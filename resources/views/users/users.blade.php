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
              <h3 class="box-title">Users table</h3>
              <a class="btn btn-info text-right" href="{{route('users.create')}}">New User</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Picture</th>
                
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($users as $key=> $user)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="text-center">
                      
                   <img src="{{asset('images/'.$user->image)}}" height="50" width="50" class="shadow-xl">

                    </td>
                  
                    <td width="150">
                      <a href="{{route('users.show',$user->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                      <a href="{{route('users.edit',$user->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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