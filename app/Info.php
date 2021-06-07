<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{

    protected $fillable = ['description', 'action', 'priority'];
    protected $guarded = [];

    public function homes()
    {
        return $this->belongsToMany(Home::class);
    }


}
