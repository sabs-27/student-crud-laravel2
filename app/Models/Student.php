<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Specify which fields can be mass-assigned (used in create/update)
    protected $fillable = [
        'name',
        'date_of_birth',
        'intake_class',
        'department_id',
    ];
}
