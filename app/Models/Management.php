<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'designation', 'image'];

    // Specify the table name
    protected $table = 'management'; // or the actual table name




}
