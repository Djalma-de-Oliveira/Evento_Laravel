<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Event extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'name',
        'speaker_name',
        'start_date',
        'end_date',
        'target_audience',
        'participant_limit'
    ];
}
