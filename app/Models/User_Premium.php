<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Premium extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'user_id',
        'end_of_subscription',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
