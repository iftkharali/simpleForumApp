@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post show</div>

                <div class="card-body">
                    <div class="post">
                        <h3> {{$post->title}} </h2>
                        <p>  {{$post->description}}</p>
                        <img src="{{$post->image}}" alt="" class="mb-3">
                            @foreach ( $post->comments as $key => $comment )
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$comment->user->name}}</strong></a>
                                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            
                                                </p>
                                                <div class="clearfix"></div>
                                                <p>{{ $comment->comment}} </p>
                                                <a id="edit_comment" href="javascript:void(0);"> Edit </a> &nbsp; <a href="javascript:void(0);" id="delete_comment"> Delete </a>
                                            </div>
                                        </div>
                                            
                                        </div>
                                     </div>
                                     
                                @endforeach

                
                        <form action="{{route('comments.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <label for="comment mb-3" >Comment</label>
                                <input type="text" id="comment" class="form-control @error('comment') is-invalid @enderror" name="comment">
                                @error('comment')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">comment</button>
                        </form>



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

