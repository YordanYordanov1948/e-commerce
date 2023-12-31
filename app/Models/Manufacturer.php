<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Релация към Product (many-to-many)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
