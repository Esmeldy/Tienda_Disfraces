<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
