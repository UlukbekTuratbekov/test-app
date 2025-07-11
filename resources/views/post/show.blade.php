@extends('layouts.main')
@section('content')
<div>

        <div> {{$post->id}}. {{$post->title}} </div>
        <div> {{$post->id}}. {{$post->post_content}} </div>
</div>
<div>
    <a href="{{route('post.edit', $post->id)}}" class="btn btn-info">Edit</a>
</div>
<div >
    <form action="{{route('post.destroy', $post->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class = "btn btn-danger">
    </form>
</div>

    <div>
        <a href="{{route('post.index')}}" class="btn btn-dark">Back</a>
    </div>

@endsection

