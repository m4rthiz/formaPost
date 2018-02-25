<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Post extends Model
{
    use SyncsWithFirebase;
    
    public $timestamps = false;

    protected $fillable = ['title', 'desc', 'date', 'dificulties', 'acquired', 'codingTime'];
}
