<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmers extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'farmers',
        'description',
       
    ];
}
