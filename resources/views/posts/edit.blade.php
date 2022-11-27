@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit </div>

                <div class="card-body">
                    <form action="{{route('posts.update',[$post->id])}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label for="formGroupExampleInput">Post title</label>
                          <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" id="formGroupExampleInput" value="{{$post->title}}">
                          @error('title')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Post description</label>
                            <textarea  id="description" class="form-control @error('description') is-invalid @enderror" name="description" id="exampleFormControlTextarea1" rows="6">{{$post->description}}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                      </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
