<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class new_model extends Model
{
    use HasFactory;
    protected $newD = [
        'nama','username','password'
    ];
    
}
