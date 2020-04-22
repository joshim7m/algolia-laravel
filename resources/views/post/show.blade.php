@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post Detail <a href="{{route('home')}}">Home</a></div>

                <div class="card-body">
                    <div class="card-title">{{ $post->title }}</div>
                    <div class="card-text">
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
