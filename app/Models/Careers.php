<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    protected $table = 'careers'; 

     protected $fillable = [
        'job_title',
        'job_type',
        'qualification',
        'location',
        'experience_id',
        'slug',
        'sort_order',
        'skills',
        'image',
        'status_id',
        'deadline',
        'job_sector_id',
    ];
    
       public function getStatusAttribute()
    {
        return $this->status_id == 1 ? 'Active' : 'Inactive';
    }
     public function experiences()
    {
        return $this->belongsTo(Experience::class, 'experience_id', 'id');
    }
      public function jobsectors()
    {
        return $this->belongsTo(JobSector::class, 'job_sector_id', 'id');
    }
       public function jobtype()
    {
        return $this->belongsTo(JobType::class, 'job_type', 'id');
    }
}
