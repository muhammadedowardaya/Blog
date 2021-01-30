@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Blog</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->body}}</p>
                    <a href="{{route('posts')}}" class="btn btn-secondary">Back</a>
                    <a href="{{route('post.edit',$post->slug)}}" class="btn btn-success">Edit</a>
                    <a href="{{route('post.delete',$post->id)}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection