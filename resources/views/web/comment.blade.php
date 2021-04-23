 @if($post->comments->count() >=1)
 <h4 class="comments-count"> {{$post->comments->count()}} Comments</h4>
            @foreach($post->comments as $comment)
              <div id="comment-1" class="comment clearfix">
                <img src="{{URL::to('/')}}/images/{{$comment->user->image}}" class="comment-img  float-left" alt="profile" style="border-radius: 50%; height: 60px;width: 60px; padding: 4px" >
               {{--  {{ URL::to('/') }}/images/{{ Auth::user()->image }} --}}
                <h5><a href="">{{$comment->user->name}}</a> </h5>
                <time datetime="2020-01-01">{{$comment->created_at->diffForHumans()}}</time>
                <p>
                  {{$comment->comment}}
                </p>

              </div><!-- End comment #1 -->

              @endforeach
 @else

<h4 class="comments-count"> No Comment Found</h4>
 @endif


 

<div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>


                @guest
                  <p>Please login
                    <a href="{{route('login')}}" class="btn btn-info">Login</a>
                  </p>
                @else
                <form action="{{route('comment.store',$post->id)}}" method="post">
                 @csrf
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>
                @endguest
 </div>