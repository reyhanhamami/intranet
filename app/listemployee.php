<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listemployee extends Model
{
    protected $table = "employee";
    protected $primaryKey = "id_employee";
    protected $fillable = ['nama', 'foto', 'divisi', 'jabatan', 'email','handphone'];

    public $timestamps = false;
}
