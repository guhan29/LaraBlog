@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-height justify-content-center">
        <div class="col-md-8 left">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header">
                        <span class="h3">
                            <a href="{{ route('posts.show', $post->id) }}" class="card-link">{{ $post->title }}</a>
                        </span>
                        <small>By</small>
                        <span class="h6">
                            <a href="#">{{ $post->user->name }}</a>
                        </span>
                        - {{ $post->created_at->diffForHumans() }}
                    </div>

                    <div class="card-body">
                        {{ Str::limit($post->body, 30, ' ...') }}
                    </div>
                </div>
                <br>
            @endforeach

            {{ $posts->links() }}
        </div>

        @auth
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
        @endauth
    </div>
</div>
@endsection
