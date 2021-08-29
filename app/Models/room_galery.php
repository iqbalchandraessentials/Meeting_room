<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_galery extends Model
{
    protected $fillable = [
        'photos', 'room_id'
    ];

    protected $hidden = [];

    public function galeri()
    {
        return $this->belongsTo(room_meeting::class, 'room_id', 'id');
    }
}
