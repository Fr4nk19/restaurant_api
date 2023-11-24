<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class RestaurantUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
        // otros campos que sean necesarios
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function branch() {
        return $this->belongsTo(Branches::class, 'id_branch');
    }

    public function role() {
        return $this->belongsTo(Roles::class, 'id_role');
    }
}
