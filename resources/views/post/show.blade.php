@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Blog</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{!!nl2br($post->body)!!}</p>
                    <a href="{{route('posts')}}" class="btn btn-secondary">Back</a>
                    <a href="{{route('post.edit',$post->slug)}}" class="btn btn-success">Edit</a>
                    <a href="#" data-id="{{$post->id}}" data-title="{{$post->title}}" class="btn btn-danger btnDelete">
                        <form action="{{route('post.delete',$post->id)}}" id="delete{{$post->id}}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                        Delete
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection