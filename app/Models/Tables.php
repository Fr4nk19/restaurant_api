<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    use HasFactory;

    public function zone() {
        return $this->belongsTo(ZoneTables::class, 'id_zone');
    }

    public function orders() {
        return $this->hasMany(Orders::class, 'id_table');
    }
}
