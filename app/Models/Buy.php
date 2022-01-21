<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'product_id'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_id');
    }
}
