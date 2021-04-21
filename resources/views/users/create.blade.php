@extends('posts.main_layout')
@section('body_section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
  <div class="container">
  	
      <div class="row">
        <div class="col-md-12">
        	<form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
					@csrf
        	

        		<div class="form-group">
        			<input type="text" name="name" placeholder="Enter User Name" class="form-control">
        		</div>

            <div class="form-group">
              <input type="text" name="email" placeholder="Enter Gmail" class="form-control">
            </div>

            <div class="form-group">
              <input type="password" name="password" placeholder="Enter password" class="form-control">
            </div>
            
        		
        		<div class="form-group">
        			<input type="file" name="image" placeholder="Enter Title" class="form-control">
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