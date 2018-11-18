<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // Table Name
    protected $table = 'games';
    // Primary Key
    public $primaryKey = 'id';
    // Timstamps
    public $timestamps = 'true';
}
