<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $fillable = ['word', 'definition', 'category'];
}
