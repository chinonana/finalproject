<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //リレーション（ポスト）
    // コメントは1つのポストに所属
    public function post()
    {
        return $this->belongTo('App\Post');
    }
}
