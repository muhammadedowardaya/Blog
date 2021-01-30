@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                @csrf
                @method('PATCH')
                @include('post.partials.form',['submit' => 'Update'])
            </form>
        </div>
    </div>
</div>
@endsection