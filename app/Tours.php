<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    protected $fillable = ['image', 'title','price', 'action', 'priority'];
    protected $guarded = [];
}
