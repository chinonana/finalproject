<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //リレーション（カテゴリ）
    // カテゴリは複数のポストを持つ
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
