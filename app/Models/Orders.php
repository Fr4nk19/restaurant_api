<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function orderDetails() {
        return $this->hasMany(OrderDetails::class, 'id_order');
    }

    public function table() {
        return $this->belongsTo(Tables::class, 'id_table');
    }

    public function user() {
        return $this->belongsTo(RestaurantUser::class, 'id_user');
    }

    public function status() {
        return $this->belongsTo(OrderStatus::class, 'id_status');
    }
    
}
