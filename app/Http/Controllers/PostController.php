<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('post.index', compact('posts'));



    }
    public function create() {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => '',
            'post_content' => '',
            'image' => ''

        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
       return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }








    public function update(Post $post) {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string'
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }










    public function destroy(Post $post) {
//        $post = Post::withTrashed()->find(3);
        $post->delete();
        return redirect()->route('post.index');
    }

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some image',
            'likes' => '500000',
            'is_published' => 1
        ];

        $post = Post::firstOrCreate([
            'title' => 'first title'
        ],
        [
            'title' => 'some posttt',
            'content' => 'some contenttt',
            'image' => 'some imagee',
            'likes' => '200000',
            'is_published' => 0
        ]) ;
        dump($post->title);
        dd('finished');

    }

    public function updateOrCreate(){
        $post = Post::updateOrCreate([
            'title' => 'some postt'
    ],
    [
        'title' => 'first title',
        'content' => 'first content',
        'image' => 'first image',
        'likes' => '50',
        'is_published' => 1

    ]);
        dump($post->title);
        dump('finished');
    }









}
