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

    public function store() {
        $data = request()->validate([
            'title' => '',
            'post_content' => '',
            'image' => ''

        ]);
        dd($data);
    }






    public function update() {
       $post = Post::find(1);
       $post->update([
            'title' => 'first title',
            'post_content' => 'first content ',
            'image' => 'first image',
            'likes' => '30',
            'is_published' => '0',
       ]);
       dd("updated");
    }

    public function delete() {
        $post = Post::withTrashed()->find(3);
        $post->delete();
        dd('deleted');
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
