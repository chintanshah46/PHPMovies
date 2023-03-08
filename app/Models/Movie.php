<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function actors(){
        return $this->belongsToMany('App\Models\Actor');
    }

    public function scopeFilter($query, array $filters){
        if ( $filters['search'] ?? false ){
            $query->where('name','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%');
        }
    }
}
