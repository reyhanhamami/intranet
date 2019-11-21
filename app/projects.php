<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $table = 'projects';
    protected $fillable = ['nama_projects','status_projects','date_projects','persentase_projects','divisi_projects'];
    protected $primaryKey = 'id_projects';
}
