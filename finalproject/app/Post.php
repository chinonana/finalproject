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
    
    //ページネーション
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    
}
