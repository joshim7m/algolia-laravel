@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post <a href="{{route('home')}}">Home</a></div>

                <div class="card-body">
                    
                <form action="{{route('post.store')}}" method="post">
                  @csrf


                  <div class="form-group">
                    <label >Post Title</label>
                    <input type="text" class="form-control" name="title">
                  </div>

                  <div class="form-group">
                    <label>Post Content</label>
                    <textarea name="content" class="form-control" rows="5"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
