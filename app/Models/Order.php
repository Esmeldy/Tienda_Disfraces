<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function order()
    {
        return $this->belongsTo(User::class);
    }
    public function orderDetail()
    {
        return $this->belongsToMany(OrderDetails::class);
    }
    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
