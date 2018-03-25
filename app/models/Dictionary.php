<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dictionary extends Model
{
//    use SoftDeletes;

    protected $fillable = ['word', 'definition', 'category'];

    public function posts()
    {
        return $this->belongsToMany('App\models\Post');
    }
}
