<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = ['judul','tanggal','deskripsi','foto'];
    protected $primaryKey = 'id_artikel';

    public $timestamps = false;
}
