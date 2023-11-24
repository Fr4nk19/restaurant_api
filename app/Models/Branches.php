<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function restaurantUsers() {
        return $this->hasMany(RestaurantUser::class, 'id_branch');
    }

    public function zoneTables(){
        return $this->hasMany(ZoneTables::class);
    }

    public function tables() {
        return $this->hasMany(Tables::class, 'id_branch');
    }
}
