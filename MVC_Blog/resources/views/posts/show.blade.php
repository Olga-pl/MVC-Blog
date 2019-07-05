@extends('layouts.app')

@section('content')
<div class="container">

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">
                    {{$post->title}}
                </h2>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{$post->tag}}
                </h6>
                <h4 class="card-text">
                    {{$post->content}}
                </h4>
                <p class="card-subtitle mb-2 text-muted">
                    Created at : {{$post->created_at}}
                </p>
             <p class="card-subtitle mb-2 text-muted">
                 Post by : {{$post->user->username}}
             </p>
             <a class="nav-link" href="{{ route('my.comment.create', $post->id) }}"><button type="button" class="btn btn-info float-right">Add Comment</button></a>
            </div>
        </div>
        <br>

        <div class="card" style="width: 18rem;">
            <div class="card-header bg-dark text-light">
              <h2>Comments</h2>
            </div>
            <ul class="list-group list-group-flush">
              @foreach($comments as $comment)
              <li class="list-group-item">{{$comment->comment}}</li>
              @endforeach
            </ul>
          </div>
       
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status')}}; 
        </div>
    
    @endif
        
        </div>
@endsection