<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_meeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'capacity', 'location', 'facility', 'hours_availibility', 'days_availibility', 'status'
    ];
    protected $hidden = [];

    public function galleries()
    {
        return $this->hasMany(room_galery::class, 'room_id', 'id');
    }
}
