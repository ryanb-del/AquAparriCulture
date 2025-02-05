<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AquaEquipment extends Model
{
    use HasFactory;

    // Specify the table name explicitly
    protected $table = 'aqua-equipments';

    // Specify which attributes are mass assignable
    protected $fillable = ['image', 'name', 'description', 'type'];
}
