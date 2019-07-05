@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <hr>
     <form action="{{route('posts.update', [$post->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title"  name="title" value='{{$post->title}}' >
      </div>
      <div class="form-group">
        <label for="description">Content</label>
        <input type="text" class="form-control" id="content" name="content" value="{{$post->content}}" >
      </div>
      <div class="form-group">
        <label for="description">Tag</label>
        <input type="text" class="form-control" id="tag" name="tag" value="{{$post->tag}}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status')}}; 
        </div>
    
    @endif
@endsection