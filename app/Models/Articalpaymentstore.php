<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articalpaymentstore extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone_number',
        'refrence_no',
        'email',
        'screenshot',
    ];
}
