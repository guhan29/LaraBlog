@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-height justify-content-center">
        <div class="col-md-8 left">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">Body</label>

                            <div class="col-md-6">
                                <textarea rows="6" cols="20" id="body" class="form-control @error('body') is-invalid @enderror" name="body" required autocomplete="body" autofocus>{{ old('body') }}</textarea>

                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
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
