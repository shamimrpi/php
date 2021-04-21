@extends('posts.main_layout')
@section('body_section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
  <div class="container">
  	
      <div class="row">
        <div class="col-md-12">
        	<form action="{{route('header_update',$header->id)}}" method="post">
					@csrf
          @method('put')

        		<div class="form-group">
        			<input type="text" name="email" value="{{$header->email}}" placeholder="Enter email" class="form-control">
        		</div>
          
        		
        		<div class="form-group">
        			<input type="text" name="phone" value="{{$header->phone}}" placeholder="Enter Phone" class="form-control">
        		</div>

        	 <div class="form-group">
              <input type="text" name="address" value="{{$header->address}}" placeholder="Enter Address" class="form-control">
            </div>
         

         <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <!-- /.box -->

       
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

		</div>

    </div>
@stop