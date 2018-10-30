<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';

    public $timestamps = false;

    protected $fillable = ["name"];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
