<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'prix', 'image', 'stock'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
