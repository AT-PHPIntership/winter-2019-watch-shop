<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends /*Model*/ \Eloquent implements Authenticatable
{
	use AuthenticableTrait;
    protected $fillable = [
 		'username', 'password', 'email', 'image_url', 'address', 'role'
    ];

    protected $hidden = [
    	'password', 'remember_token'
    ];
}
