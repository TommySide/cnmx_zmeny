<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    protected $table = 'user_holidays';

    protected $dates = ['date_from', 'date_to', 'date_canceled'];

    protected $casts = [
        'date_from' => 'date',
        'date_to' => 'date',
        'date_canceled' => 'date',
    ];

    protected $fillable = [
        'date_from', 'date_to', 'popis',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function getDate($date)
    {
        return Carbon::parse($date)->format('d.m.Y');
    }
}
