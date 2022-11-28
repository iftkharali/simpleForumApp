@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add </div>

                <div class="card-body">
                        <form action="{{route('posts.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                            <label for="title">Post title</label>
                            <input type="text" name="title" class="form-control @error('description') is-invalid @enderror" id="title" placeholder="Title">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>


                            <div class="form-group">
                                <label for="description">Post description</label>
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"  rows="6"> </textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>

                        </form>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
