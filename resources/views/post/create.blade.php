@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('post.store')}}" method="post">
                @csrf
                @include('post.partials.form')
            </form>
        </div>
    </div>
</div>
@endsection