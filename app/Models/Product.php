<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable =[
        'name', 'description', 'price', 'age', 'image'
    ];
    public function providers()
    {
        return $this->hasMany(Provider::class);
    }
    public function thematic()
    {
        return $this->belongsTo(Thematic::class);
    }
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
    public function ordetDetail()
    {
        return $this->belongsTo(OrderDetails::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
