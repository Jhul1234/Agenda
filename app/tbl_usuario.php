<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class tbl_usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;
    public $table = 'tbl_usuario';
}
