@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-height justify-content-center">
        <div class="col-md-8 left">
            @foreach ($posts as $post)
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
                <br>
            @endforeach
        </div>
    </div>
</div>
@endsection
