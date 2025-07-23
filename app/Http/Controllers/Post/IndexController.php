<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;


class IndexController extends BaseController
{

    public function __invoke(Request $request)
    {

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($request->all())]);
        $posts = Post::filter($filter)->paginate(10);
//        $query = Post::query();
//
//        if ($request->get('title')) {
//            $query->where('title', 'like', "%{$request->get('title')}%");
//        }
//        if ($request->get('category_id')) {
//            $query->where('category_id', $request->get('category_id'));
//        }
//        dd($query->toSql());
//        $posts = $query->paginate(10);
        return view('post.index', compact('posts'));

    }


}









//if (isset($data['category_id'])) {
//    $query->where('category_id', $data['category_id']);
//}
//
//if (isset($data['title']))
//{
//    $query->where('title', 'like', '%' . $data['title'] . '%');
//}
//if (isset($data['content']))
//{
//    $query->where('content', 'like', '%' . $data['content'] . '%');
//}
//if (isset($data['image'])) {
//    $query->where('image', 'like', '%' . $data['image'] . '%');
//}

