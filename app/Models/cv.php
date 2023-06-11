<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cv extends Model
{
    protected $guarded=[''];
    use HasFactory;

     public function job()
    {
        return $this->belongsTo(job::class);
    }
}
