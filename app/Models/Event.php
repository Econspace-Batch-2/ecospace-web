<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Define filable for event
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'categories',
        'event_image',
        'speaker',
        'speaker_image'        
    ];

    // Has many registered user
    public function registeredUsers()
    {
        return $this->belongsToMany(User::class);
    }
    
}
