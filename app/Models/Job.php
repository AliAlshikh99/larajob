<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $guarded=[''];
    use SoftDeletes;


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,array $filters)
    {
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('tags','like','%' . request('search') . '%')
            ->orWhere('company','like','%' . request('search') . '%');
        }
    }


}
