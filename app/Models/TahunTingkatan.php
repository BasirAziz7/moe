<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunTingkatan extends Model
{
    use HasFactory;
    
    public function keputusans() 
    {
        return $this->hasMany(Keputusan::class);
    }

}   