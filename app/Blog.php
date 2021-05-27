<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'data', 'description', 'action', 'priority'];
    protected $guarded = [];
}
