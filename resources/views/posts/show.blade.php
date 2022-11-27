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
                        <img src="{{$post->image}}" alt="">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
