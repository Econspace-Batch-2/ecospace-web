<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;


    protected $fillable = [
        'mentor_name',
        'mentor_position',
        'mentor_company',
        'mentor_thumbnail',
        'mentor_profile',
        'mentor_linkedin',
        'mentor_achievements',
        'mentor_category',
        'mentor_photo_journey',
    ];

    protected $casts = [
        'mentor_achievements' => 'array',
        'mentor_category' => 'array',
        'mentor_photo_journey' => 'array',
    ];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
