<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $post) {
            dump($post->content);

        }

    }
//    public function create() {
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
//        Post::create([
//            'title' => 'anoother title of post from phpstorm',
//            'content' => 'another some intersting content',
//            'image' => 'another image.jpg',
//            'likes' => '50',
//            'is_published' => '1',
//        ]);
//        dd("created");
//    }

    public function update() {
       $post = Post::find(4);
       $post->update([
            'title' => 'updated title',
            'content' => 'updated content ',
            'image' => 'updated image',
            'likes' => '23',
            'is_published' => '23',
       ]);
       dd("updated");
    }

    public function delete() {
        $post = Post::withTrashed()->find(3);
        $post->delete();
        dd('deleted');
    }








}
