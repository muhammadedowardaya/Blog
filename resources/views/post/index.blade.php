@extends('layouts.app')

@section('title','Posts')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            @forelse($posts as $post)
            <div class="card mb-3 shadow">
                <div class="card-header">
                    Blog
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{Str::limit($post->body,100)}}</p>
                    <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read more</a>
                </div>
            </div>
            @empty
            <h1>Tidak ada Post</h1>
            @endforelse
        </div>
    </div>
    {{$posts->links()}}
</div>

@endsection