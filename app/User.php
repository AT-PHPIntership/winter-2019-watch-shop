<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
 		'id', 'username', 'password', 'email', 'image_url', 'address', 'role'
    ];

    protected $hidden = [
    	'password'
    ];
}
