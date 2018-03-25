<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public $timestamps = false;

    protected $fillable = ['title', 'desc', 'date', 'dificulties', 'acquired', 'codingTime'];

    public function dictionaries()
    {
        return $this->belongsToMany('App\models\Dictionary');
    }
}
