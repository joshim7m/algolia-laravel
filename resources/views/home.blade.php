@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul><a href="{{route('post.create')}}">Create Post</a></ul>
                    <ul><a href="{{route('post.index')}}">All Post</a></ul>
                    <ul><a href="{{route('post.search')}}">Search Server Side</a></ul>
                    <ul><a href="{{route('post.searchjs')}}">Search Client Side</a></ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
