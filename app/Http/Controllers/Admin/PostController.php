<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends  Controller
{
    public function index(Request $request)
    {
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($request->all())]);
        $posts = Post::filter($filter)->paginate(10);

        return view('admin.post.index', compact('posts'));
    }
}
