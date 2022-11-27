@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts
                    <a href="{{route('posts.create')}}" class="btn btn-primary"> Add </a>

                </div>

                <div class="card-body">
                    @if (session('msg'))
                    <div class="alert alert-success" role="alert">
                        {{ session('msg') }}
                    </div>
                    @endif
                    @foreach ($posts as $post)
                    <div class="post">
                        <a href="{{ route('posts.show', [$post->id])}}" > 
                        <p> {{$post->title}}  </p>
                        </a>
                    </div>
                    
                <div style="display: flex;"> 
                    <div class="form-group">
                        <a href="{{route('posts.edit', [$post->id])}}" class="btn btn-primary"> Edit </a>
                    </div>
                    <form id="delete{{$post->id}}" action="{{route('posts.destroy', [$post->id])}}" method="POST">
                        @csrf
                        @method('delete')    
                            <div class="form-group">
                                <input type="submit" class="btn btn-danger delete-post" value="Delete">
                            </div>
                        </form>
                </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
    $('.delete-post').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });

    })

</script>
@endsection
