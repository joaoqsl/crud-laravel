<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'email',
        'tel',
        'social'
    ];
}
