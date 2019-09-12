<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pencerahan extends Model
{
    Protected $table = 'pencerahan';
    Protected $fillable = ['type', 'deskripsi'];
    Protected $primaryKey = 'id_pencerahan';
    // public function mastertype(){
    //     return $this->belongsTo(Mastertype::class);
    // }
}
