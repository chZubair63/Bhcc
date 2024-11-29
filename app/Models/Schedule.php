<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'title', 'description', 'day', 'start_time', 'end_time', 'status_id'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'status_id'); // Ensure 'id' exists in the 'status' table
    }
}