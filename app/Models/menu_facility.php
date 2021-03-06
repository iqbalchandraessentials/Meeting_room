<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class menu_facility extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'status', 'id_category'
    ];
    protected $hidden = [];

    public function category()
    {
        return $this->belongsTo(categoryFacility::class, 'id_category', 'id');
    }
}
