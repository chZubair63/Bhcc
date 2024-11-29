<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // Define the table name
    protected $table = 'status';

    // Define the primary key if it's different from 'id'
    protected $primaryKey = 'status_id';

    // Specify the key type if it's not an integer (optional)
    protected $keyType = 'int';

    // Disable auto-incrementing if primary key is not auto-incrementing (optional)
    public $incrementing = true;
}