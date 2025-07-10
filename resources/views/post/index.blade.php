@extends('layouts.main')
@section('content')
<div>
    @foreach($posts as $post)
        <div>{{$post->title}}</div>
    @endforeach
</div>
        <div>
            this is post page
        </div>
@endsection

