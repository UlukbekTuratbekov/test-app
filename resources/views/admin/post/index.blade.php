@extends('layouts.admin')
@section('content')
    <div>
        <a href="{{route('admin.post.create')}}" class="btn btn-success">Add new post</a>
    </div>

    <div>
        @foreach($posts as $post)
            <a href="{{route('post.show', $post->id)}}"><div>{{$post->id}}. {{$post->title}}</div></a>
        @endforeach
    </div>

    <div>
        {{$posts->withQueryString()->links()}}
    </div>
@endsection
