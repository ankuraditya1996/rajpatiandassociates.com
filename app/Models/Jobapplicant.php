<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobapplicant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'applying_for',
        'phone_number',
    ];
}
