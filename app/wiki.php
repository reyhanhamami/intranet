<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wiki extends Model
{
    protected $table = 'SysSec_users';
    protected $connection = 'sqlsrv';
    public $timestamps = false;
}
