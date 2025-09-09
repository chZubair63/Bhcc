<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
  
    protected $table = 'tenders';
    
    protected $fillable = [
        'job_title',
        'qualifications',
        'location',
        'experience',
        'slug',
        'sort_order',
        'skills',
        'image',
        'status_id',
        'deadline',
    ];
}
