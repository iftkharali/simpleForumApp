@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex">
        @if (session('msg'))
        <div class="alert alert-success" role="alert">
            {{ session('msg') }}
        </div>
        @endif
        @foreach ($posts as $post)
        <div class="col-md-3  mb-3">
            <div class="card" style="width: 17rem;">
                <a href="{{ route('posts.show', [$post->id])}}">
                    <img class="card-img-top" src="https://via.placeholder.com/400x400.png?text=No%20Image" alt="No Image">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{$post->short_title}}</h5>
                    <p class="card-text">{{ $post->short_description }}</p>
                    <a href="{{ route('posts.show', [$post->id])}}" class="btn btn-link">Read more...</a>
                    @can('edit',$post)
                        <a href="{{route('posts.edit', [$post->id])}}" class="btn btn-link "> <i class="fa fa-edit"></i> </a>
                    @endcan
                    
                    @can('delete',$post)
                        <form class="d-inline" id="delete{{$post->id}}" action="{{route('posts.destroy', [$post->id])}}" method="POST">
                            @csrf
                            @method('delete')    
                            <button type="submit" class="btn btn-link delete-post text-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    @endcan
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
</div>
</div>

@endsection
