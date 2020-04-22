@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Post  <a href="{{route('home')}}">Home</a></div>

                @foreach($posts as $post)
                <div class="card-body border-bottom">
                    <div class="card-title">
                      <h4>{{ $post->title }}</h4>
                    </div>
                    <div class="card-text">
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
