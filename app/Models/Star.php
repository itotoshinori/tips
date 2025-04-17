<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'registration_user_id',
        'point',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
