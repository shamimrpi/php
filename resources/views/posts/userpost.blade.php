@extends('posts.inherit')
@section('body')
<div class="container">
    @foreach ($posts as $key=>$post)
        <p>{{ $post->title }}</p>
        <img src="{{url('images/'.$post->image)}}" height="300" width="300">
        <p>{{ $post->description }}</p>
       <p>{{$post->user_id}}</p>
    @endforeach
</div>

{{ $posts->links() }}
@stop