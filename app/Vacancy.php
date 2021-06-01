<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table = 'vacancys';
    protected $fillable = ['image', 'title','description', 'action', 'priority'];
    protected $guarded = [];
}
