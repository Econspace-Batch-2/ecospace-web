<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'position',
        'company',
        'thumbnail',
        'profile',
        'linkedin',
        'achievements',
        'category',
        'photo_journey',
    ];

    protected $casts = [
        'achievements' => 'array',
        'category' => 'array',
        'photo_journey' => 'array',
    ];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
