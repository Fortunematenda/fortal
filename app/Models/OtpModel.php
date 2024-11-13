<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpModel extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'otp', 'expires_at'];

    protected $dates = ['expires_at'];
}
