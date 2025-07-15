@extends('layouts.main')
@section('content')
    <div style="width: 950px; padding-left: 50px">
    <form method = post action="{{route("post.update", $post->id)}}">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" name="post_content" id="content" placeholder="Content">{{$post->post_content}}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{$post->image}}">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{$category->id == $post->category->id ? ' selected ' : ' '  }}
                        value="{{$category->id}}">{{$category->title}}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select multiple class="form-select" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $postTag)
                        {{ $tag->id === $postTag->id ? 'selected' : ''}}
                        @endforeach
                        value="{{$tag->id}}">{{$tag->title}}
                    </option>
                @endforeach
            </select>
            <div class="form-text">Hold Ctrl (Windows) or Cmd (Mac) to select multiple.</div>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>

@endsection

