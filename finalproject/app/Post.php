<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    // create製作処理
    protected $fillable = [
    'body',
    'title',
    'category_id',
    ];
    
    //リレーション（カテゴリ）
    // 投稿は一つのカテゴリーに属している
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    //リレーション（コメント）
    // 投稿はコメントを複数持つ
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    //ページネーション
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}
