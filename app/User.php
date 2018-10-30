<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'admins';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    // 模型查询数据，返回字段不包含 password 和 token
    protected $hidden = [
        'password', 'remember_token',
    ];
}
