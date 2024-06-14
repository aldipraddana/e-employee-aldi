<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    
    protected $fillable = [
        'name',
        'place_of_birth',
        'date_of_birth',
        'email',
        'phone',
        'work_entry_date',
        'work_end_date',
        'job',
        'workplace',
        'created_by',
    ];
}
