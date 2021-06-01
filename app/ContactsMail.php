<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactsMail extends Model
{
    protected $table = 'contactsmails';
    protected $fillable = ['name', 'email', 'message'];
    protected $guarded = [];
}
