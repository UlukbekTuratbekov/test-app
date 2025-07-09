<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts');



    }
    public function create() {
//        $postsArr = [
//            [
//                'title' => 'title of post from phpstorm',
//                'content' => 'some intersting content',
//                'image' => 'image.jpg',
//                'likes' => '20',
//                'is_published' => '1',
//            ],
//            [
//                'title' => 'anoother title of post from phpstorm',
//                'content' => 'another some intersting content',
//                'image' => 'another image.jpg',
//                'likes' => '50',
//                'is_published' => '1',
//            ],
//        ];
//
//        foreach ($postsArr as $key => $post) {
//            if ($key == 1) {
//                Post::create($post);
//            }
//        }
        Post::create([
            'title' => 'anoother title of post from phpstorm',
            'post_content' => 'another some intersting content',
            'image' => 'another image.jpg',
            'likes' => '50',
            'is_published' => '1',
        ]);
        dd("created");
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
        $post->restore();
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
