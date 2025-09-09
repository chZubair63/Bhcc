<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSector extends Model
{
    protected $table = 'job_sector';

    protected $fillable = [
        'job_type',
        'status_id',
    ];
}
