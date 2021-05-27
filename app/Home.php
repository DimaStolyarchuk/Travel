<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['image', 'title', 'description_1','description_2', 'description_3', 'action', 'priority'];
    protected $guarded = [];
}
