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
    return view('index')->with(['posts' => $post->getPaginateByLimit()]);
    } 
    //カテゴリ表示
    public function create(Category $category)
    {
        //カテゴリーの情報をカテゴリーズから持ってくる
        return view('create')->with(['categories'=>$category->get()]);
        //一緒にcategoriesのデータも渡すwithで
    }
    
    //個別ページ表示
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
    
    
}
