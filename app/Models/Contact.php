<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'type',
        'specialty',
        'instructor_id',
        'message',
        'status',
    ];
}
