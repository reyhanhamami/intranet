<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    protected $table = 'education';
    protected $fillable = ['judul','divisi','foto1','foto2','foto3','file'];
    protected $primaryKey = 'id_education';

    public $timestamps = false;
}
