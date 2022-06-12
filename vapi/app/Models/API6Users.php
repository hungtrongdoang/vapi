<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API6Users extends Model
{
    use HasFactory;

    public $timestamps = false;
    //whitelist
    protected $fillable=['name','username','password','credit'];
    protected $hidden=['password'];


    //blacklist
    //protected $fillable=['name','username','password'];
    //protected $guarded = ['credit'];
}