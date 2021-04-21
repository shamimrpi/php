@extends('posts.main_layout')
@section('body_section')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
  <div class="container">
  	
      <div class="row">
        <div class="col-md-12">
        	<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
					@csrf
        	

        		<div class="form-group">
        			<input type="text" name="title" placeholder="Enter Title" class="form-control">
        		</div>
            <div class="form-group">
             <select name="category_id" class="form-control">
              @foreach($categories as $key=>$category)
                    <option value="{{$key}}">{{$category}}</option>
                    @endforeach
             </select>
            </div>
        		
        		<div class="form-group">
        			<input type="file" name="image" placeholder="Enter Title" class="form-control">
        		</div>
        	
          <div class="box box-info">
          
            <!-- /.box-header -->
            <div class="box-body pad">
              
                    <textarea id="editor1" name="description" rows="10" cols="80">
                                      This is my textarea to be replaced with CKEditor.
                    </textarea>
              
            </div>
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