<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'pronouns',
        'street',
        'ward',
        'province',
        'birth_date',
        'phone',
        'school',
        'user_id',
    ];
}
