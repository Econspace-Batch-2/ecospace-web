<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    // 1 topic can only have 1 subject
    // 1 subject can have many topic
    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
