<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'mother_first_name',
        'mother_last_name',
        'mother_email',
        'mother_phone',
        'mother_employer',
        'father_first_name',
        'father_last_name',
        'father_email',
        'father_phone',
        'father_employer',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
