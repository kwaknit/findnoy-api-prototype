<?php

namespace App;

use App\Base;

class FiledCase extends Base
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'type',
        'full_name',
        'gender',
        'last_seen_date',
        'last_seen_place',
        'status',
        'issued_at',
        'closed_at',
        'assigned_to_user_id',
        'privacy',
        'police_station_id'
    ];
}