<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Dictionary extends Model
{
    use SyncsWithFirebase;
    protected $fillable = ['word', 'definition', 'category'];
}
