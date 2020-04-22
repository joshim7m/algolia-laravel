@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <h2>Search For Post</h2>
      <form action="{{route('post.search')}}" method="get">
        @csrf
        <div class="input-group">
          <input type="text" class="form-control" name="q" placeholder="search for a post" value="{{ old('q') }}">

            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary">Search</button>
            </span>
        </div>
      </form>
      <hr>
      <br>
      <br>
    </div>
    </div>

      @foreach($results as $post)
        
        <div class="row justify-content-center">
          <div class="col-md-10 pb-3">
            <h3 class="mb-2"><a href="{{route('post.show', $post->id)}}">{{ $post->title }}</a></h3>
            <div class="content">
              <p>{{ $post->content }}</p>
            </div>
          </div>
        </div>
        
      @endforeach
      
      @if(count($results) > 0)
      <div class="row justify-content-center">
        <div class="col-md-10 pb-3">
          <div class="text-center">
            {{ $results->links() }}
          </div>
        </div>
      </div>

      @endif


</div>
@endsection
