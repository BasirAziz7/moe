<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fail extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'file_path'
    ];
}
