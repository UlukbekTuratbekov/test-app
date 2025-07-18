@extends('layouts.main')
@section('content')
    <div style="width: 950px; padding-left: 50px">
    <form method = post action="{{route("post.store")}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{old('title')}}">
            @error('title')
                <div class="text-danger">{{$message}} </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" name="content" id="content" placeholder="Content" >{{old('content')}}</textarea>
            @error('content')
            <div class="text-danger">{{$message}} </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{old('image')}}">
            @error('image')
            <div class="text-danger">{{$message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select multiple class="form-select" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
            <div class="form-text">Hold Ctrl (Windows) or Cmd (Mac) to select multiple.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection

