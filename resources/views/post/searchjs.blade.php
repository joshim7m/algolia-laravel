@extends('layouts.app')

@section('content')
<div class="container">

<my-search>
</my-search>



      {{--   <div class="row justify-content-center">
          <div class="col-md-10 pb-3">
            <h3 class="mb-2"><a href="{{route('post.show', $post->id)}}">{{ $post->title }}</a></h3>
            <div class="content">
              <p>{{ $post->content }}</p>
            </div>
          </div>
        </div> --}}

</div>
@endsection
