@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('post.update',$post->slug)}}" method="post">
                @csrf
                @method('patch')
                @include('post.partials.form',['submit' => 'Update'])
            </form>
        </div>
    </div>
</div>
@endsection