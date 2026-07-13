<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
		// 以下1行を追加
    protected $fillable = ['user_id','title','is_done'];
}
