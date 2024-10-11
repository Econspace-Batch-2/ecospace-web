<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    // 1 subject can have many topics
    // 1 topic can only have 1 subject
    public function topics()
    {
        return $this->hasMany(Topic::class, 'subject_id');
    }
}
