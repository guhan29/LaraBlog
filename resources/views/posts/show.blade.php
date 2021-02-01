@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-height justify-content-center">
        <div class="col-md-8 left">
            <div class="card">
                <div class="card-header"><a href="{{ route('posts.show', $post->id) }}" class="card-link">{{ $post->title }}</a> <small class="text-small">by</small> <a href="#">{{ $post->user->name }}</a></div>

                <div class="card-body">
                    {{ $post->body }}
                </div>
            </div>
        </div>
        <div id="sidebar" class="col-md-4 right">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Sidebar
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Friends</li>
                    <li class="list-group-item">About</li>
                    <li class="list-group-item">Profile</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
