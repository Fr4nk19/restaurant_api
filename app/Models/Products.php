<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    public function category() {
        return $this->belongsTo(CategoryProducts::class, 'id_category');
    }

    public function orderDetails() {
        return $this->hasMany(OrderDetails::class, 'product_id');
    }

    public function inventory() {
        return $this->hasOne(Inventory::class, 'product_id');
    }
}
