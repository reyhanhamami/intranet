<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['nama_tasks','employee'];
    protected $primaryKey = 'id_tasks';
}
