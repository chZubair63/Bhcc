<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['name', 'description', 'image','heading'];

    // Laravel assumes the 'id' is the auto-incrementing primary key by default.
    
}
