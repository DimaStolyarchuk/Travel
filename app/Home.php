<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    protected $fillable = ['image', 'title', 'action', 'priority'];
    protected $guarded = [];

    public function infos()
    {
        return $this->belongsToMany(Info::class);
    }
}
