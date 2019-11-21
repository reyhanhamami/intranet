<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
    protected $table = 'diskusi';
    protected $fillable = ['author_diskusi','topic_diskusi','label_diskusi','tanggal_diskusi','deskripsi_diskusi'];
    protected $primaryKey = 'id_diskusi';
}
