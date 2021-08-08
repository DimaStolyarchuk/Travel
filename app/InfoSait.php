<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoSait extends Model
{
    protected $table = 'infosaits';
    protected $fillable = ['image', 'description', 'action', 'priority'];
    protected $guarded = [];
}
