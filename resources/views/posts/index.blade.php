@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('msg'))
            <div class="alert alert-success" role="alert">
                {{ session('msg') }}
            </div>
            @endif
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="card-header">
                                <p> {{$post->title}}  </p>
                        </div>

                        <div class="card-body">
                            <div class="d-flex"> 
                                
                                <div class="form-group ">
                                    <a href="{{ route('posts.show', [$post->id])}}" class="btn btn-primary"> View </a>
                                </div>

                                @can('edit',$post)
                                    <div class="form-group">
                                        <a href="{{route('posts.edit', [$post->id])}}" class="btn btn-primary"> Edit </a>
                                    </div>
                                @endcan
                                
                                @can('delete',$post)
                                    <form id="delete{{$post->id}}" action="{{route('posts.destroy', [$post->id])}}" method="POST">
                                        @csrf
                                        @method('delete')    
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-danger delete-post" value="Delete">
                                            </div>
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
