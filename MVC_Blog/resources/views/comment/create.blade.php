@extends('layouts.app')

@section('content')
<div class="container">
<h1>Add comment</h1>


<form method="post" action="{{ route('my.comment.store', ['id' => $id]) }}">
     {{ csrf_field() }}
  <div class="form-group">
    <label for="comment">Comment</label>
    <input type="text" class="form-control" id="comment" name="comment" required>
  </div> 
  <button type="submit" class="btn btn-primary">Add comment</button>
</form>
</div>
@endsection