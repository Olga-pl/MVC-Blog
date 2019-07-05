@extends('layouts.app')

@section('content')
<div class="container">

    @foreach ($posts as $post)

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
                 Post by : {{$post->user['username']}}
             </p>

             <a class="nav-link" href="{{ route('posts.show', $post->id) }}"><button type="button" class="btn btn-primary">See the post</button></a>
                @if($post->user_id == Auth::user()->id)
                
                <a href='{{ route('posts.edit', $post->id) }}'><button type="button" class="btn btn-warning">Edit</button></a><br>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    <button type="submit" class="btn btn-danger" >Delete</button>
                    {!! method_field('delete') !!}
                    {!! csrf_field() !!}
                </form>
                @endif
                
            </div>
        </div>
       
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status')}}; 
        </div>
    
    @endif
        
        
    @endforeach
    {{ $posts->links() }}
        </div>
@endsection