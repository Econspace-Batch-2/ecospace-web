<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'university',
        'appointlet_proof',
        'name',
        'major',
        'whatsapp_link',
        'email',
        'lecturer_name',
        'payment_proof',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
