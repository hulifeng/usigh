<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Article;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';

    protected $fillable = ["name", "description"];

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $dates = ['deleted_at'];
}
