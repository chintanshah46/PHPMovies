<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    public function movies(){
        return $this->belongsToMany('App\Models\Movie');
    }

    public function scopeFilter($query, array $filters){
        if ( $filters['search'] ?? false ){
            $query->where('name','like','%'.request('search').'%')
            ->orWhere('birth_place','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%');
        }
    }
}
