<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    protected $table = 'eventpersonal';
    protected $fillable = ['title','color','start_date','end_date','url','deskripsi','foto'];
    protected $primaryKey = 'id_eventpersonal';
}
