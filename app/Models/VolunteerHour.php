<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization',
        'name',
        'phone',
        'email',
        'date',
        'service_type_id',
        'start_time',
        'end_time',
        'description',
        'user_id'
    ];

    public function service_type() {
        return $this->hasOne(ServiceType::class, 'id', 'service_type_id');
    }
}
