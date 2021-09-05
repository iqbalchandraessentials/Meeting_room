<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fnb_orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_book', 'id_name', 'id_category', 'note', 'qty'
    ];
    protected $hidden = [];
    public function menu()
    {
        return $this->belongsTo(menu_fnb::class, 'id_name', 'id');
    }
}
