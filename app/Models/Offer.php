<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function offers()
    {
        return $this->hasMany(User::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
