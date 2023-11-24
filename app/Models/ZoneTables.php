<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoneTables extends Model
{
    use HasFactory;

    public function tables() {
        return $this->hasMany(Tables::class, 'id_zone');
    }
}
