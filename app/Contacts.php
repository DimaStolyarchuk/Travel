<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = ['image','tel', 'description_1', 'description_2', 'description_3', 'action', 'priority'];
    protected $guarded = [];
}
