<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    protected $table = 'job_type';

    protected $fillable = [
        'job_type',
        'status_id',
    ];
}
