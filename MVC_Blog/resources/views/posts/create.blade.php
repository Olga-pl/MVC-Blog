@extends('layouts.app')

@section('content')
<div class="container">
<h1>Create Posts</h1>


<form method="post" action="{{ route('posts.store') }}">
     {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div> 
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" aria-label="With textarea" id="content" name="content" required></textarea>
  </div>
  <div class="form-group">
    <label for="tag">Tag</label>
    <input type="text" class="form-control" id="tag" name="tag">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection