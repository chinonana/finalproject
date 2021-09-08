<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //リレーション（コメント）
    // 投稿はコメントを複数持つ
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    //リレーション（カテゴリ）
    // 投稿は一つのカテゴリーに属している
    public function category()
    {
        return $this->belongTo('App\Category');
    }
    
    
}
