<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    //
    protected $fillable = ['title', 'singer', 'count_songs', 'genre', 'year'];
    public $timestamps = false;
}
