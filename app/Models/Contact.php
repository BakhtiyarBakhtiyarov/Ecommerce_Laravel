<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
//    protected $fillable = ['name','slug','icon'];
    protected $guarded = ['id'];
    public $timestamps = false;
}
