<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    //index表示
    public function index(Post $post)
    {
        $posts=Post::with('category')->paginate(10);
        return view('index')->with(['posts' => $posts]);
    //$post->getPaginateByLimit()＝ポストテーブルの中身
    //'posts' =>＄ポストにポスつという名前にする
    }    
    
    //個別post表示
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }

    //create表示
    public function create(Category $category)
    {
        //カテゴリーの情報をカテゴリーズから持ってくる
        return view('create')->with(['categories'=>$category->get()]);
        //一緒にcategoriesのデータも渡すwithで
    }
    //投稿製作処理
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
}
