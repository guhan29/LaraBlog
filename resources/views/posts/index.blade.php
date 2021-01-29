@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-height justify-content-center">
        <div class="col-md-8 left">
            <p>{{ dd($posts) }}<p>
        </div>
    </div>
</div>
@endsection
