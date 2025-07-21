@extends('layouts.main')
@section('content')
<div>
    <div>
        <a href="{{route('post.create')}}" class="btn btn-success">Add new post</a>
    </div>

    <div>
    @foreach($posts as $post)
        <a href="{{route('post.show', $post->id)}}"><div>{{$post->id}}. {{$post->title}}</div></a>
    @endforeach
    </div>

    <div>
        {{$posts->withQueryString()->links()}}
    </div>
</div>

@endsection

