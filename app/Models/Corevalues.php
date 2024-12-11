<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corevalues extends Model
{
    use HasFactory;

    protected $table = 'core_value'; // Define the table name

    protected $fillable = [
        'name',
        'description',
        
        'image',
        // 'heading',  // Make sure the image field is fillable
    ];
}


