<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'start_date',
        'end_date',
        'capacity',
        'organizer_name',
        'organizer_email',
        'contact_number',
        'poster_image',
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];
}
