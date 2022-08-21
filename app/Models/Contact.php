<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    
    
    protected $fillable = [
        'title',
        'description',
        'address',
        'office_hours',
        'phone_one',
        'phone_two',
        'phone_three',
        'email_one',
        'email_two',
        'email_three',
        'facebook',
        'twitter',
        'linkedin',
        'youtube',
        'instagram',
        'map_location',
    ];
}
