<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'education_training',
        'degrees',
        'area_of_expertise',
        'languages',
        'work_days',
        'diploma_certifcate',
        'email',
        'phone',
        'image',
    ];
    protected $table = 'doctors'; // or the actual table name




}
