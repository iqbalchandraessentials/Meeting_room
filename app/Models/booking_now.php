<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking_now extends Model
{
    use HasFactory;
    protected $fillable = [
        'code', 'date', 'start', 'untill', 'id_room', 'pic_name', 'pic_email', 'pic_phone', 'fnb', 'description', 'status'
    ];
    protected $hidden = [];




    public function room()
    {
        return $this->belongsTo(room_meeting::class, 'id_room', 'id');
    }
    public function menuFNB()
    {
        return $this->hasMany(fnb_orders::class, 'id_book', 'code');
    }
}
